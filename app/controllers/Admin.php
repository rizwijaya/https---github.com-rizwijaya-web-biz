<?php

class admin extends Controller 
{
   /* public function __construct()
    {
        if(!$_SESSION) {
            header('location:' . BASEURL . '/home/redirecting');
        }
        if($_SESSION['id_grup'] != 1) {
            header('location:' . BASEURL . '/home/redirecting');
        }
    }*/
    public function index() 
    {
       //echo 'Ini halaman admin';
       //$data['title'] = " - Admin";
       $data['title'] = "Dashboard";
        $this->view('templates/admin/header');
        $this->view('templates/admin/sidebar', $data);
        $this->view('admin/dashboard');
        $this->view('templates/admin/footer');
    }

    public function dashboard() 
    {
      /*  if(!$_SESSION) {
            header('location:' . BASEURL . '/home/redirecting');
        }
        if($_SESSION['id_grup'] != 1) {
            header('location:' . BASEURL . '/home/redirecting');
        }*/
       //echo 'Ini halaman admin';
       //$data['title'] = " - Admin";
       $data['title'] = "Dashboard";
        $this->view('templates/admin/header');
        $this->view('templates/admin/sidebar', $data);
        $this->view('admin/dashboard');
        $this->view('templates/admin/footer');
    }

    public function laporan()
    {
        /*if(!$_SESSION) {
            header('location:' . BASEURL . '/home/redirecting');
        }
        if($_SESSION['id_grup'] != 1) {
            header('location:' . BASEURL . '/home/redirecting');
        }*/
        echo 'Ini halaman admin/laporan';
    }
}