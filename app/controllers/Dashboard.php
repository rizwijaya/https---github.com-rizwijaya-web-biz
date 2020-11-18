<?php

class Dashboard extends Controller 
{
   public function __construct()
    {
        if(!$_SESSION) {
            header('location:' . BASEURL . '/home/redirecting');
        }
        if($_SESSION['id_grup'] == 3) {
            header('location:' . BASEURL . '/home/redirecting');
        }
    }
    public function index() 
    {
       //echo 'Ini halaman admin';
       //echo $_SESSION['id_grup'];
        $data['id_grup'] = $_SESSION['id_grup'];
       //$data['title'] = " - Admin";
        $data['title'] = "Dashboard";
        $this->view('templates/admin/header');
        $this->view('templates/admin/sidebar', $data);
        $this->view('admin/dashboard');
        $this->view('templates/admin/footer');
    }
    
    public function laporan()
    {
        echo 'Ini halaman admin/laporan';
    }

    public function tambah_user()
    {
        $dt['id_grup'] = $_SESSION['id_grup'];
        $dt['title'] = "Tambah Pengguna";
        $dt['menu'] = "Pengguna";
        $dt['submenu'] = "Tambah Pengguna";
        $data = NULL;
        $this->view('templates/admin/header');
        $this->view('templates/admin/sidebar', $dt);
        $this->view('admin/tambah_user', $data);
        $this->view('templates/admin/footer');
    }

    public function data_pelanggan() 
    {
        $data['id_grup'] = $_SESSION['id_grup'];
        $data['title'] = "Data Pelanggan";
        $data['menu'] = "Pelanggan";
        $data['submenu'] = "Data Pelanggan";
        $data['pelanggan'] = $this->model('User_model')->getallpelanggan();
        $this->view('templates/admin/header');
        $this->view('templates/admin/sidebar',$data);
        $this->view('admin/pelanggan', $data);
        $this->view('templates/admin/footer');
    }

    public function data_pegawai() 
    {
        $data['id_grup'] = $_SESSION['id_grup'];
        $data['title'] = "Data Pegawai";
        $data['menu'] = "Pegawai";
        $data['submenu'] = "Data Pegawai";
        $data['pegawai'] = $this->model('User_model')->getallpegawai();
        //var_dump($data); die;
        $this->view('templates/admin/header');
        $this->view('templates/admin/sidebar',$data);
        $this->view('admin/pegawai', $data);
        $this->view('templates/admin/footer');
    }
}