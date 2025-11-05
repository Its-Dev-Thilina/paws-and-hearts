<?php

include_once BASE_PATH.'core/Controller.php';
include_once BASE_PATH.'models/User.php';

class AuthController extends Controller {
    public function login() {
        if(isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user_model = new User(self::$db);

            $has_user = $user_model->is_valid_data($username, $password);

            if($has_user) {
                $_SESSION['user'] = $has_user['id'];
                $_SESSION['logged_in'] = true;
                $this->redirect('/');
            }

        }

        if(has_session('logged_in')) {
            $this->redirect('/');
        }
        
        $this->view('auth/login.php');
    }

    public function logout() {
        session_destroy();
        $this->redirect('/login');
    }
}