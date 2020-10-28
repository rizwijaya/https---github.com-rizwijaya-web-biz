<?php

class Rental_model {
    private $mobilget = 'mobil';
    private $type = 'type';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getallkendaraan()
    {
        $this->db->query('SELECT * FROM ' . $this->mobilget);
        return $this->db->resultSet();
    }
    public function getalltype()
    {
        $this->db->query('SELECT * FROM ' . $this->type);
        return $this->db->resultSet();
    }
    public function tambah_kendaraan($data, $name)
    {
        $query = "INSERT INTO mobil
                    VALUES
                ('', :kode_type, :merk, :no_plat, :warna, :tahun, :status, :harga, :lokasi, :denda, :ac, :transmission, :kilometer, :video_player, :gambar)";

        $this->db->query($query);
        $this->db->bind('kode_type', $data['kode_type']);
        $this->db->bind('merk', $data['merk']);
        $this->db->bind('no_plat', $data['no_plat']);
        $this->db->bind('warna', $data['warna']);
        $this->db->bind('tahun', $data['tahun']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('lokasi', $data['lokasi']);
        $this->db->bind('denda', $data['denda']);
        $this->db->bind('ac', $data['ac']);
        $this->db->bind('transmission', $data['transmission']);
        $this->db->bind('kilometer', $data['kilometer']);
        $this->db->bind('video_player', $data['video_player']);
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

    public function update_kendaraan($data)
    {
        $query = "UPDATE mobil SET
                    kode_type = :kode_type, 
                    merk = :merk, 
                    no_plat = :no_plat, 
                    warna = :warna,
                    tahun = :tahun, 
                    status = :status,
                    harga = :harga,
                    lokasi = :lokasi,
                    denda = :denda,
                    ac = :ac,
                    transmission = :transmission,
                    kilometer = :kilometer,
                    video_player = :video_player
                WHERE id_mobil= :id_mobil";

        $this->db->query($query);
        $this->db->bind('kode_type', $data['kode_type']);
        $this->db->bind('merk', $data['merk']);
        $this->db->bind('no_plat', $data['no_plat']);
        $this->db->bind('warna', $data['warna']);
        $this->db->bind('tahun', $data['tahun']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('lokasi', $data['lokasi']);
        $this->db->bind('denda', $data['denda']);
        $this->db->bind('ac', $data['ac']);
        $this->db->bind('transmission', $data['transmission']);
        $this->db->bind('kilometer', $data['kilometer']);
        $this->db->bind('video_player', $data['video_player']);
        $this->db->bind('id_mobil', $data['id_mobil']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function update_foto_kendaraan($name, $data)
    {
        $this->db->query("UPDATE mobil SET gambar = :gambar WHERE id_mobil= :id_mobil");
        $this->db->bind('gambar', $name);
        $this->db->bind('id_mobil', $data['id_mobil']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataKendaraan($id)
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

    public function detailKendaraan($id)
    {
        $q = "SELECT * FROM mobil mb, type tp WHERE mb.kode_type = tp.kode_type AND mb.id_mobil ='$id'";
        $this->db->query($q);
        return $this->db->resultSet();
    }
}