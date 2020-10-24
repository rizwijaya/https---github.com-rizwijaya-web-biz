<?php

class Rental_model {
    private $mobilget = 'mobil';
    private $type = 'type';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getallmobil()
    {
        $this->db->query('SELECT * FROM ' . $this->mobilget);
        return $this->db->resultSet();
    }
    public function getalltype()
    {
        $this->db->query('SELECT * FROM ' . $this->type);
        return $this->db->resultSet();
    }
    public function tambah_mobil($data, $name)
    {
        $query = "INSERT INTO mobil
                    VALUES
                ('', :kode_type, :merk, :no_plat, :warna, :tahun, :status, :gambar)";

        $this->db->query($query);
        $this->db->bind('kode_type', $data['kode_type']);
        $this->db->bind('merk', $data['merk']);
        $this->db->bind('no_plat', $data['no_plat']);
        $this->db->bind('warna', $data['warna']);
        $this->db->bind('tahun', $data['tahun']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('gambar', $name);

        $this->db->execute();

        return $this->db->rowCount();
    }
}