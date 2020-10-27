<?php

class Pegawai extends Controller
{
    public function index() 
    {
        $data['title'] = "Dashboard";
       //echo 'Ini halaman Pegawai';
        $this->view('templates/admin/header');
        $this->view('templates/admin/sidebar', $data);
        $this->view('pegawai/dashboard');
        $this->view('templates/admin/footer');
    } 

    public function dashboard() 
    {
       //echo 'Ini halaman Pegawai';
       $data['title'] = 'Dashboard';
      //echo 'Ini halaman Pegawai';
       $this->view('templates/admin/header');
       $this->view('templates/admin/sidebar', $data);
       $this->view('pegawai/dashboard');
       $this->view('templates/admin/footer');
    }
}
