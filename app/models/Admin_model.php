<?php

class Admin_model{
    private $table = 'admin';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAll_admin()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    
}