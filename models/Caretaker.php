<?php

include_once BASE_PATH.'core/Model.php';

class Caretaker extends Model{
    protected $table = "caretaker";

    public function __construct($db) {
        $this->db = $db;
    }

    public function get_all() {
        $data = [];

        $query = "
        SELECT caretaker.id,caretaker.name,gender.gender,caretaker.dob,caretaker.contact,caretaker.address,caretaker.experience,caretaker.special,caretaker.join_date
        FROM $this->table
        INNER JOIN gender
        ON caretaker.gender = gender.id";

        $data = $this->db->get_connection()->query($query)->fetch_all(MYSQLI_ASSOC);

        return $data;
    }
}