<?php

class Pelanggan extends Controller
{
    public function __construct()
    {
        if (!$_SESSION) {
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

    public function pembayaran($id)
    {
        $data['transaksi'] = $this->model('pelanggan_model')->pembayaran($id);
        $data['mobil'] = $this->model('rental_model')->getallkendaraan();
        $this->view('templates/pelanggan/header');
        $this->view('pelanggan/payment', $data);
        $this->view('templates/pelanggan/footer');
    }

    public function cetakpembayaran($id)
    {
        $data['transaksi'] = $this->model('pelanggan_model')->pembayaran($id);
        $data['mobil'] = $this->model('rental_model')->getallkendaraan();
        $this->view('pelanggan/cetakpayment', $data);
    }

    public function upload_bukti()
    {
        //Inisialisasi Data Gambar
        $temp = $_FILES['gambar']['tmp_name'];
        $name = rand(0, 9999) . $_FILES['gambar']['name'];
        $size = $_FILES['gambar']['size'];
        $type = $_FILES['gambar']['type'];
        $folder = "foto_bukti/";
        //Melakukan pengecekan ukuran file dan format
        if ($size < 2048000 and ($type == 'image/jpeg' or $type == 'image/png' or $type == 'image/jpg')) {
            move_uploaded_file($temp, $folder . $name); //Melakukan upload ke folder/nama
            //Input ke database
            if ($this->model('Pelanggan_model')->upload_bukti($_POST, $name) > 0) {    //Menambahkan ke database
                Flasher::setFlash('Bukti Pembayaran berhasil diupload!', ' Tunggu konfirmasi pembayaran maksimal 1x24jam.', 'success');
                $this->pembayaran($_POST['id_rental']);
                exit;
            } else {
                Flasher::setFlash('Kesalahan,', ' Bukti Pembayaran gagal diupload!', 'danger');
                $this->pembayaran($_POST['id_rental']);
                exit;
            }
        } else {
            Flasher::setFlash('Kesalahan,', ' Bukti Pembayaran gagal diupload!, Format upload tidak sesuai.', 'danger');
            $this->pembayaran($_POST['id_rental']);
            exit;
        }
    }
}
