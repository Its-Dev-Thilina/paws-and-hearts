<?php

declare(strict_types=1);

class Database {

    private $db_connection;

    private function create_instance() {
        if(empty($this->db_connection)) {
            $this->db_connection = new mysqli(HOST_NAME, DB_USERNAME, DB_PASSWORD, DATABASE, PORT);
        }

        return $this->db_connection;
    }

    public function get_connection():mysqli {
        return $this->create_instance();
    }
}