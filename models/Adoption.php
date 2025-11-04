<?php

include_once BASE_PATH.'core/Model.php';

class Adoption extends Model{
    protected $table = "adoption";

    public function __construct($db) {
        $this->db = $db;
    }
}