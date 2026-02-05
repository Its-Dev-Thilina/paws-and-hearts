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

        if(has_set_value(post('submit'))) {
            $name = post('name');
            $gender = post('gender');
            $dob = post('dob');
            $contact = post('contact');
            $address = post('address');
            $occupation = post('occupation');
            $is_other_pets = post('is_other_pets');
            $pet_type = post('pet_type');
            $note = post('note');

            $fields = [
                "name" => $name,
                "gender" => $gender,
                "dob" => $dob,
                "contact" =>$contact,
                "address" => $address,
                "occupation" => $occupation,
                "is_other_pets" => $is_other_pets,
                "pet_type" => $pet_type,
                "note" => $note
            ];

            $adopter_model = new Adopter(self::$db);
            $adopter_model->insert($fields);

            $this->redirect('/adopters');
        }
        
        $this->view('adopters/create.php');
    }
}