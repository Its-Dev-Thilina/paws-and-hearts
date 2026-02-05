<?php

include_once BASE_PATH.'core/Controller.php';
include_once BASE_PATH.'models/Adoption.php';

class AdoptionController extends Controller {
    public function index() {
        check_auth(fn () => $this->redirect('/login'));

        $caretaker_id = $_GET['caretaker_id'] ?? null;
        if(isset($caretaker_id)) {

            $pet_model = new Pet(self::$db);
            $pets = $pet_model->get_all_by_caretaker($caretaker_id);

            $data = [
                "pets" => $pets
            ];

            header('Content-Type: application/json');
            echo json_encode($data);
            return;
        }


        if(has_set_value(post('submit'))) {
            
            $this->redirect('/adoptions');
        }


        $adoption_model = new Adoption(self::$db);
        $adoptions = $adoption_model->get_all();

        $caretakers = $adoption_model->get_caretakers_for_adoption();

        $adaptor_modal = new Adopter(self::$db);
        $adoptors = $adaptor_modal->get('id, name');

        $data = [
            "adoptions" => $adoptions,
            "caretakers" => $caretakers,
            "adoptors" => $adoptors
        ];

        $this->view('adoptions/index.php', $data);
    }
}