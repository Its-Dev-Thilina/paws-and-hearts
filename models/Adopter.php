<?php

include_once BASE_PATH.'core/Model.php';

class Adopter extends Model{
    protected $table = "adopter";

    public function __construct($db) {
        $this->db = $db;
    }

    public function get_all() {
        $data = [];

        $query = "
        SELECT adopter.id,adopter.name,adopter.pet_type,gender.gender,adopter.dob,adopter.contact,adopter.address,adopter.occupation,adopter.is_other_pets,adopter.register_date
        FROM adopter
        INNER JOIN gender
        ON adopter.gender = gender.id";

        $data = $this->db->get_connection()->query($query)->fetch_all(MYSQLI_ASSOC);

        return $data;
    }
}