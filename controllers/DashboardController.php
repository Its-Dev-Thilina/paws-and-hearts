<?php

include_once BASE_PATH.'core/Controller.php';

class DashboardController extends Controller {
    public function index() {
        $this->view('dashboard/index.php', ['name' => "Thilina"]);
        // $this->redirect('/views/dashboard/login.php');
    }
}