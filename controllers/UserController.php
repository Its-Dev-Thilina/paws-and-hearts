<?php

include_once BASE_PATH.'core/Controller.php';
include_once BASE_PATH.'models/User.php';

class PetController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        check_auth(fn () => $this->redirect('/login'));
    }

    public function create() {
        check_auth(fn () => $this->redirect('/login'));
    }

    public function edit() {
        check_auth(fn () => $this->redirect('/login'));
    }

    public function delete() {
        check_auth(fn () => $this->redirect('/login'));

    }

}