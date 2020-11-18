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
    public function tambah_kendaraan($data, $name, $fitur)
    {
        $query = "INSERT INTO mobil
                    VALUES
                ('', :kode_type, :merk, :no_plat, :warna, :tahun, :status, :harga, :lokasi, :denda, :transmission, :kilometer, :ac, :anti_lock, :music_player, :video_player, :gambar)";

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
        $this->db->bind('transmission', $data['transmission']);
        $this->db->bind('kilometer', $data['kilometer']);
        $this->db->bind('ac', $fitur['ac']);
        $this->db->bind('anti_lock', $fitur['anti_lock']);
        $this->db->bind('music_player', $fitur['music_player']);
        $this->db->bind('video_player', $fitur['video_player']);
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

    public function update_kendaraan($data, $fitur)
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
                    transmission = :transmission,
                    kilometer = :kilometer,
                    ac = :ac,
                    anti_lock = :anti_lock,
                    music_player = :music_player,
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
        $this->db->bind('transmission', $data['transmission']);
        $this->db->bind('kilometer', $data['kilometer']);
        $this->db->bind('id_mobil', $data['id_mobil']);
        $this->db->bind('ac', $fitur['ac']);
        $this->db->bind('anti_lock', $fitur['anti_lock']);
        $this->db->bind('music_player', $fitur['music_player']);
        $this->db->bind('video_player', $fitur['video_player']);

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

    public function tambah_tipe($data)
    {
        $query = "INSERT INTO type
                    VALUES
                ('', :kode_type, :nama_type)";

        $this->db->query($query);
        $this->db->bind('kode_type', $data['kode_type']);
        $this->db->bind('nama_type', $data['nama_type']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function update_tipe($data)
    {
        $this->db->query("UPDATE type 
                    SET kode_type = :kode_type, 
                    nama_type = :nama_type 
                    WHERE id_type= :id_type");
        $this->db->bind('kode_type', $data['kode_type']);
        $this->db->bind('nama_type', $data['nama_type']);
        $this->db->bind('id_type', $data['id_type']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deletetipe($id)
    {
        $query = "DELETE FROM type WHERE id_type = :id_type";
        $this->db->query($query);
        $this->db->bind('id_type', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getdetailkendaraan($id)
    {
        $q = "SELECT * FROM mobil mb, type tp WHERE mb.kode_type = tp.kode_type AND mb.id_mobil ='$id'";
        $this->db->query($q);
        return $this->db->resultSet();
    }

    public function tambah_sewa($data, $id)
    {
        $query = "INSERT INTO payment
                    VALUES
                ('', :id_pelanggan, :id_mobil, :tanggal_rental, :tanggal_kembali, :harga, :denda, '', :status_pengembalian, :status_rental)";

        $this->db->query($query);
        $this->db->bind('id_pelanggan', $id['id_pelanggan']);
        $this->db->bind('id_mobil', $data['id_mobil']);
        $this->db->bind('tanggal_rental', $data['tanggal_sewa']);
        $this->db->bind('tanggal_kembali', $data['tanggal_kembali']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('denda', $data['denda']);
        $this->db->bind('status_pengembalian', 0);
        $this->db->bind('status_rental', 0);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getIdPelanggan($id)
    {
        $q = "SELECT id_pelanggan FROM pelanggan WHERE id_user ='$id'";
        $this->db->query($q);
        return $this->db->single();
    }

    public function updateStatus($sts, $id)
    {
        $this->db->query("UPDATE mobil SET status = :status WHERE id_mobil= :id_mobil");
        $this->db->bind('status', $sts);
        $this->db->bind('id_mobil', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}