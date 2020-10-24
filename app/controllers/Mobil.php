<?php

class mobil extends Controller 
{
    public function data_mobil() 
    {
      /*  if(!$_SESSION) {
            header('location:' . BASEURL . '/home/redirecting');
        }
        if($_SESSION['id_grup'] == 3 ) {
            header('location:' . BASEURL . '/home/redirecting');
        }
        /*if($_SESSION['id_grup'] != 1 || $_SESSION['id_grup'] != 2) {
            header('location:' . BASEURL . '/home/redirecting');
        }*/
        
        $data['mobil'] = $this->model('rental_model')->getallmobil();
        $data['type'] = $this->model('rental_model')->getalltype();
        $this->view('templates/admin/header');
        $this->view('templates/admin/sidebar');
        $this->view('admin/data_mobil',$data);
        $this->view('templates/admin/footer');
       //echo 'Ini halaman admin/data_mobil';
    }

    public function tambah_mobil()
    {
        //Inisialisasi Data Gambar
        $temp = $_FILES['gambar']['tmp_name'];
        $name = rand(0,9999).$_FILES['gambar']['name'];
        $size = $_FILES['gambar']['size'];
        $type = $_FILES['gambar']['type'];
        $folder = "foto_mobil/";
        //Melakukan pengecekan ukuran file dan format
        if ($size < 2048000 and ($type =='image/jpeg' or $type == 'image/png' or $type == 'image/jpg')) {
            move_uploaded_file($temp, $folder . $name); //Melakukan upload ke folder/nama
            //Input ke database
            if ($this->model('Rental_model')->tambah_mobil($_POST, $name) > 0) {
                Flasher::setFlash('Data Kendaraan berhasil', ' ditambahkan', 'success');
                    header('location: ' . BASEURL . '/mobil/data_mobil');
                    exit;
                } else {
                    Flasher::setFlash('Data Kendaraan gagal', ' ditambahkan', 'danger');
                    header('location: ' . BASEURL . '/mobil/data_mobil');
                    exit;
                }
        }else{
            Flasher::setFlash('gagal', ' Upload Gambar', 'danger');
            header('location: ' . BASEURL . '/mobil/data_mobil');
            exit;
        }
    }
/*
    public function data_type()
    {
        echo 'Ini halaman admin/data_type';
    } */
}