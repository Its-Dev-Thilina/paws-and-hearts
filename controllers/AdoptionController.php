<?php

include_once BASE_PATH.'core/Controller.php';
include_once BASE_PATH.'models/Adoption.php';

class AdoptionController extends Controller {
    public function index() {
        check_auth(fn () => $this->redirect('/login'));

        $adoption_model = new Adoption(self::$db);
        $adoptions = $adoption_model->get_all();

        $data = [
            "adoptions" => $adoptions
        ];

        $this->view('adoptions/index.php', $data);
    }
}