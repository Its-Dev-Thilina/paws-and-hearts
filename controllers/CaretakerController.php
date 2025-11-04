<?php

include_once BASE_PATH.'core/Controller.php';

class CaretakerController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view('caretakers/index.php');
    }

    public function create() {
        $this->view('caretakers/create.php');
    }
}