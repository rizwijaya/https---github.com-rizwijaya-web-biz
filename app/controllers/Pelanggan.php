<?php

class Pelanggan extends Controller 
{
    public function index()
    {
        $data['mobil'] = $this->model('rental_model')->getallmobil();
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
    public function data_pelanggan()
    {
        echo 'Ini halaman pelanggan/data_pelanggan';
    }
}