<?php

include_once BASE_PATH.'core/Controller.php';
include_once BASE_PATH.'models/PetSpecie.php';
include_once BASE_PATH.'models/Pet.php';

class PetController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        check_auth(fn () => $this->redirect('/login'));


        $pet_specie_model = new PetSpecie(self::$db);
        $pet_species = $pet_specie_model->get_all();
        
        $pet_model = new Pet(self::$db);
        $pets = $pet_model->get_all();

        $data = [
            "pet_species" => $pet_species,
            "pets" => $pets,
        ];

        $this->view('pets/index.php', $data);
    }

    public function create() {
        check_auth(fn () => $this->redirect('/login'));

        if(isset($_POST['submit'])) {
            $id = $_POST['id'];
        }
        
        $this->view('pets/create.php');
    }

    public function edit() {
        check_auth(fn () => $this->redirect('/login'));

        if(isset($_POST['submit'])) {
            $id = $_POST['id'];
        }

        $this->view('pets/create.php');
    }

    public function delete() {
        check_auth(fn () => $this->redirect('/login'));

        if(isset($_POST['submit'])) {
            $id = $_POST['id'];

            $pet_model = new Pet(self::$db);
            $pet_model->delete($id);
        }

        $this->redirect('/pets');
    }

    public function create_specie() {
        check_auth(fn () => $this->redirect('/login'));
        $this->view('pets/species/create.php');
    }

    public function edit_specie() {
        check_auth(fn () => $this->redirect('/login'));
        $this->view('pets/species/create.php');
    }
}