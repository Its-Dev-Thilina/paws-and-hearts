<?php
include_once BASE_PATH.'core/Controller.php';
include_once BASE_PATH.'models/PetSpecie.php';
include_once BASE_PATH.'models/Pet.php';

class PetController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
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
        if(isset($_POST['submit'])) {

            $name = $_POST['name'];
            $specie = $_POST['specie'];
            $breed = $_POST['breed'];
            $caretaker = $_POST['caretaker'];
            $date_of_birth = $_POST['dob'];
            $gender = $_POST['gender'];
            $note = $_POST['note'];
            $status = 1;

            $fields = [
                "name" => $name,
                "specie" => $specie,
                "breed" => $breed,
                "dob" => $date_of_birth,
                "gender" => $gender,
                "caretaker" => $caretaker,
                "status" => $status,
                "note" => $note
            ];

            $pet_model = new Pet(self::$db);
            $pet_model->insert($fields);

            $this->redirect('/pets');

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
        if(isset($_POST['submit'])) {
            $id = $_POST['id'];

            $pet_model = new Pet(self::$db);
            $pet_model->delete($id);
        }

        $this->redirect('/pets');
    }

    public function create_specie() {
        
        if(isset($_POST['submit'])) {
            $specie = $_POST['specie'];
            $note = $_POST['note'];

            $fields = [
                "specie" => $specie,
                "note" => $note
            ];

            $pet_specie_model = new PetSpecie(self::$db);
            $pet_specie_model->insert($fields);

            $this->redirect('/pets');
            exit;
        }

        $this->view('pets/species/create.php');
    }

    public function edit_specie() {
        $this->view('pets/species/create.php');
    }
}