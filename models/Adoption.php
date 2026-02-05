<?php

include_once BASE_PATH.'core/Model.php';

class Adoption extends Model{
    protected $table = "adoption";

    public function __construct($db) {
        $this->db = $db;
    }

    public function get_all() {
        $data = [];

        $query = "
            SELECT adoption.id, adopter.name, pet.name, pet.caretaker, adopter.register_date, adopter.note
            FROM $this->table
            INNER JOIN adopter
            ON adoption.adopter = adopter.id
            INNER JOIN pet
            ON adoption.pet = pet.id
        ";

        $data = $this->db->get_connection()->query($query)->fetch_all(MYSQLI_ASSOC);

        return $data;
    }

    public function get_caretakers_for_adoption()  {
        $table_ = "caretaker";
        $data = [];

        $query = "
            SELECT id,name,
            (SELECT GROUP_CONCAT(pet.name SEPARATOR ',') FROM pet WHERE pet.status = 1 AND pet.caretaker = $table_.id) as pets
            FROM $table_
        ";

        $data = $this->db->get_connection()->query($query)->fetch_all(MYSQLI_ASSOC);

        return $data;
    }
}