<?php

declare(strict_types=1);

include_once BASE_PATH.'core/Database.php';

class Model {
    protected $table = '';
    protected Database $db;

    public function get_all() {
        return $this->db->get_connection()->query("SELECT * FROM $this->table")->fetch_all(MYSQLI_ASSOC);
    }

    public function insert($fields) {
        $headers = implode(",",array_keys($fields));
        $values = "";

        foreach($fields as $key=>$value) {
            $values .= "'$value',";
        }

        $values = substr($values, 0,  -1);
        
        $query = "INSERT INTO $this->table ($headers) VALUES($values)";
        return $this->db->get_connection()->query($query);
    }

    public function delete($id) {
        return $this->db->get_connection()->query("DELETE FROM $this->table WHERE id=$id");
    }
}