<?php

include_once BASE_PATH.'core/Controller.php';
include_once BASE_PATH.'models/Adopter.php';

class AdopterController extends Controller {
    public function index() {
        check_auth(fn () => $this->redirect('/login'));

        $adopter_model = new Adopter(self::$db);
        $adopters = $adopter_model->get_all();

        $data = [
            "adopters" => $adopters
        ];

        $this->view('adopters/index.php', $data);
    }

    public function create() {
        check_auth(fn () => $this->redirect('/login'));
        
        $this->view('adopters/create.php');
    }
}