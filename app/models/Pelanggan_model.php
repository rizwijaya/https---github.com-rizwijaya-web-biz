<?php

class Pelanggan_model {
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }

    public function userCheckout($id)
    {
        $this->db->query("SELECT t1.merk, t1.no_plat, t1.gambar, t2.harga, t2.denda, t2.tanggal_rental, t2.tanggal_kembali FROM mobil t1 INNER JOIN payment t2 ON t1.id_mobil=t2.id_mobil WHERE t2.id_pelanggan='$id'");
        return $this->db->resultSet(); 
    }
}