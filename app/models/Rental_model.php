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

    function update($id)
    {
        $q = "SELECT * FROM mobil mb, type tp WHERE mb.kode_type = tp.kode_type AND mb.id_mobil ='$id'";
        $this->db->query($q);
        return $this->db->resultSet();
    }

    public function update_mobil($data)
    {
        $query = "UPDATE mobil SET
                    kode_type = :kode_type, 
                    merk = :merk, 
                    no_plat = :no_plat, 
                    warna = :warna,
                    tahun = :tahun, 
                    status = :status
                WHERE id_mobil= :id_mobil";

        $this->db->query($query);
        $this->db->bind('kode_type', $data['kode_type']);
        $this->db->bind('merk', $data['merk']);
        $this->db->bind('no_plat', $data['no_plat']);
        $this->db->bind('warna', $data['warna']);
        $this->db->bind('tahun', $data['tahun']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('id_mobil', $data['id_mobil']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function update_foto_mobil($name, $data)
    {
        $this->db->query("UPDATE mobil SET gambar = :gambar WHERE id_mobil= :id_mobil");
        $this->db->bind('gambar', $name);
        $this->db->bind('id_mobil', $data['id_mobil']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataMobil($id)
    {
        $query = "DELETE FROM mobil WHERE id_mobil = :id_mobil";
        $this->db->query($query);
        $this->db->bind('id_mobil', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    function getFotoById($id)
    {
        $q = "SELECT gambar FROM mobil WHERE id_mobil ='$id'";
        $this->db->query($q);
        return $this->db->single();
    }
}