<?php

include_once BASE_PATH.'core/Controller.php';

class DashboardController extends Controller {
    public function index() {

        check_auth(fn () => $this->redirect('/login'));
        
        $this->view('dashboard/index.php', ['name' => "Thilina"]);
    }
}