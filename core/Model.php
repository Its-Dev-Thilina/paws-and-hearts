<?php

declare(strict_types=1);

include_once BASE_PATH.'core/Database.php';

class Model {
    protected $table = '';
    protected Database $db;

    public function get_all() {
        return $this->db->get_connection()->query("SELECT * FROM $this->table")->fetch_all(MYSQLI_ASSOC);
    }

    public function delete($id) {
        return $this->db->get_connection()->query("DELETE FROM $this->table WHERE id=$id");
    }
}