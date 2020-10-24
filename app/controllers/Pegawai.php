<?php

class Pegawai extends Controller
{
    public function index() 
    {
        if($_SESSION) {
            $this->redirecting();
        }
       //echo 'Ini halaman Pegawai';
        $this->view('templates/admin/header');
        $this->view('templates/admin/sidebar');
        $this->view('pegawai/dashboard');
        $this->view('templates/admin/footer');
    } 

    public function dashboard() 
    {
       //echo 'Ini halaman Pegawai';
        $this->view('templates/admin/header');
        $this->view('templates/admin/sidebar');
        $this->view('pegawai/dashboard');
        $this->view('templates/admin/footer');
    }
}
