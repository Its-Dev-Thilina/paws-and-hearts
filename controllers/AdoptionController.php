<?php

include_once BASE_PATH.'core/Controller.php';

class AdoptionController extends Controller {
    public function index() {
        check_auth(fn () => $this->redirect('/login'));
        $this->view('adoptions/index.php');
    }
}