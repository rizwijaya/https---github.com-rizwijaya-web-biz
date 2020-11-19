<?php

class Pelanggan extends Controller 
{
    public function __construct()
    {
        if(!$_SESSION) {
            header('location:' . BASEURL . '/home/redirecting');
        }
    }

    public function index()
    {
        $data['mobil'] = $this->model('rental_model')->getallkendaraan();
        $this->view('templates/pelanggan/header');
        $this->view('home/index', $data);
        $this->view('templates/pelanggan/footer');
    }
    
    public function dashboard() 
    {
       //echo 'Ini halaman admin';
        $this->view('templates/pelanggan/header');
        $this->view('home/index');
        $this->view('templates/pelanggan/footer');
    }

    public function checkout()
    {
        $getId = $this->model('rental_model')->getIdPelanggan($_SESSION['id_user']); //Get Id Pelanggan
        $data['transaksi'] = $this->model('pelanggan_model')->userCheckout($getId['id_pelanggan']);
        $data['mobil'] = $this->model('rental_model')->getallkendaraan();
        $this->view('templates/pelanggan/header');
        $this->view('pelanggan/checkout', $data);
        $this->view('templates/pelanggan/footer');
    }
}