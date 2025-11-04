<?php

include_once BASE_PATH.'core/Model.php';

class Caretaker extends Model{
    protected $table = "caretaker";

    public function __construct($db) {
        $this->db = $db;
    }
}