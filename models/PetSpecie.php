<?php

include_once BASE_PATH.'core/Model.php';

class PetSpecie extends Model{
    protected $table = "pet_specie";

    public function __construct($db) {
        $this->db = $db;
    }
}