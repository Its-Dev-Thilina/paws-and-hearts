<?php

include_once BASE_PATH.'core/Controller.php';
include_once BASE_PATH.'models/Caretaker.php';

class CaretakerController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        check_auth(fn () => $this->redirect('/login'));


        $caretaker_model = new Caretaker(self::$db);
        $caretakers = $caretaker_model->get_all();

        $data = [
            "caretakers" => $caretakers
        ];

        $this->view('caretakers/index.php', $data);
    }

    public function create() {
        check_auth(fn () => $this->redirect('/login'));

        $this->view('caretakers/create.php');
    }
}