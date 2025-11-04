<?php

include_once BASE_PATH.'core/Model.php';

class Pet extends Model{
    protected $table = "pet";

    public function __construct($db) {
        $this->db = $db;
    }

    public function get_all() {
        $data = [];

        $query = "
            SELECT tbl_pets.id,tbl_pets.name,species.specie,tbl_pets.breed,tbl_pets.dob,gender.gender,tbl_pets.caretaker,state.status
            FROM $this->table AS tbl_pets 
            INNER JOIN gender 
            ON tbl_pets.gender = gender.id
            INNER JOIN available_status state 
            ON tbl_pets.status = state.id
            INNER JOIN pet_specie species
            ON tbl_pets.specie = species.id
        ";

        $data = $this->db->get_connection()->query($query)->fetch_all(MYSQLI_ASSOC);

        return $data;
    }
}