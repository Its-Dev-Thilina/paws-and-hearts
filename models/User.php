<?php

include_once BASE_PATH.'core/Model.php';

class User extends Model{
    protected $table = "users";

    public function __construct($db) {
        $this->db = $db;
    }

    public function is_valid_data($username, $password) {
        $has_a_user = false;

        $query = "
        SELECT id
        FROM $this->table
        WHERE username='$username' AND
        password='$password'
        ";

        $has_a_user = $this->db->get_connection()->query($query)->fetch_assoc();

        return $has_a_user;
    }
}