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

        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $gender = $_POST['gender'];
            $dob = $_POST['dob'];
            $contact = $_POST['contact'];
            $special = $_POST['special'];
            $experience = $_POST['experience'];
            $address = $_POST['address'];
            $note = $_POST['note'];

            $fields = [
                "name" => $name,
                "gender" => $gender,
                "dob" => $dob,
                "contact" => $contact,
                "address" => $address,
                "experience" => $experience,
                "special" => $special,
                "note" => $note,
            ];

            $caretaker_model = new Caretaker(self::$db);
            $caretaker_model->insert($fields);

            $this->redirect('/caretakers');
        }

        $this->view('caretakers/create.php');
    }
}