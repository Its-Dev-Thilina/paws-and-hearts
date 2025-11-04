<?php

include_once BASE_PATH.'core/Controller.php';

class AdopterController extends Controller {
    public function index() {
        $this->view('adopters/index.php');
    }

    public function create() {
        $this->view('adopters/create.php');
    }
}