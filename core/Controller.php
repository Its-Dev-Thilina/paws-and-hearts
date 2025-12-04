<?php

include_once BASE_PATH.'core/Database.php';

class Controller {

    protected static $db = "";

    public function __construct() {
        self::$db = new Database();
    }

    protected function view($path, $data = []) {
        extract($data);
        include_once BASE_PATH."views/$path";
    }

    protected function redirect($url) {
        header("Location: $url");
        exit;
    } 
}