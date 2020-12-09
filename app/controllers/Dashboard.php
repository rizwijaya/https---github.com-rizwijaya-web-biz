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
        $data['id_grup'] = $_SESSION['id_grup'];
        $data = array(
			'total_transaksi'       => $this->model('Rental_model')->totaltransaksi(),
			'total_user'            => $this->model('Rental_model')->totaluser(),
			'total_pegawai'         => $this->model('Rental_model')->totalpegawai(),
			'total_kendaraan'       => $this->model('Rental_model')->totalkendaraan()
        );
        $data['title'] = "Dashboard";
        $this->view('templates/admin/header');
        $this->view('templates/admin/sidebar', $data);
        $this->view('admin/dashboard', $data);
        $this->view('templates/admin/footer');
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