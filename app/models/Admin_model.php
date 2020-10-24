<?php

class Mahasiswa_model extends Controller {
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
}