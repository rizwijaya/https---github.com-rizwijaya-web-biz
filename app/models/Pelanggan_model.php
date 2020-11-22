<?php

class Pelanggan_model {
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }

    public function userCheckout($id)
    {
        $this->db->query("SELECT t1.merk, t1.no_plat, t1.gambar, t2.id_rental, t2.harga, t2.denda, t2.tanggal_rental, t2.tanggal_kembali, t2.status_rental FROM mobil t1 INNER JOIN rental t2 ON t1.id_mobil=t2.id_mobil WHERE t2.id_pelanggan='$id' ORDER BY id_rental DESC");
        return $this->db->resultSet(); 
    }

    public function pembayaran($id)
    {
        $this->db->query("SELECT t1.merk, t1.no_plat, t1.gambar, t2.id_rental, t2.harga, t2.denda, t2.tanggal_rental, t2.tanggal_kembali, t2.bukti_bayar, t2.status_rental FROM mobil t1 INNER JOIN rental t2 ON t1.id_mobil=t2.id_mobil WHERE t2.id_rental='$id'");
        return $this->db->resultSet(); 
    }
}