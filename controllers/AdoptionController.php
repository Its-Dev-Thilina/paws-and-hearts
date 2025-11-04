<?php

include_once BASE_PATH.'core/Controller.php';

class AdoptionController extends Controller {
    public function index() {
        $this->view('adoptions/index.php');
    }
}