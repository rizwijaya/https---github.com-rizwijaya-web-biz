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
            if ($this->model('Rental_model')->tambah_mobil($_POST, $name) > 0) {    //Menambahkan ke database
                Flasher::setFlash_modal('Data Kendaraan telah berhasil ditambahkan.', 'Data Kendaraan Ditambahkan!', 'success');
                    header('location: ' . BASEURL . '/mobil/data_mobil');
                    exit;
                } else {
                    Flasher::setFlash_modal('Kesalahan, data Kendaraan gagal untuk ditambahkan.', 'Data Kendaraan gagal ditambahkan!', 'danger');
                    header('location: ' . BASEURL . '/mobil/data_mobil');
                    exit;
                } 
        }else{
            Flasher::setFlash_modal('Kesalahan, data Kendaraan gagal untuk ditambahkan.', 'Data Kendaraan gagal ditambahkan!', 'danger');
            header('location: ' . BASEURL . '/mobil/data_mobil');
            exit;
        }
    }

    public function detail($id)
    {

    }

    public function delete($id)
    {
        //Ambil data mobil dari database gambar, selanjutnya hapus
        if ($this->model('rental_model')->hapusDataMobil($id) > 0) {
        
            Flasher::setFlash_modal('Data Kendaraan telah berhasil dihapus.', 'Data Kendaraan Dihapus!', 'success');
            header('location: ' . BASEURL . '/mobil/data_mobil');
            exit;
        } else {
            Flasher::setFlash_modal('Kesalahan, data Kendaraan gagal untuk dihapus.', 'Data Kendaraan gagal gagas dihapus!', 'danger');
            header('location: ' . BASEURL . '/mobil/data_mobil');
            exit;
        }
    }

    public function update()
    {
        $temp = $_FILES['gambar']['tmp_name'];
        if($temp) {
            //Inisialisasi Data Gambar
            $name = rand(0,9999).$_FILES['gambar']['name'];
            $size = $_FILES['gambar']['size'];
            $type = $_FILES['gambar']['type'];
            $folder = "foto_mobil/";
            //Melakukan pengecekan ukuran file dan format
            if ($size < 2048000 and ($type =='image/jpeg' or $type == 'image/png' or $type == 'image/jpg')) {
                move_uploaded_file($temp, $folder . $name); //Melakukan upload foto ke folder/nama
                $this->model('Rental_model')->update_foto_mobil($name, $_POST); //Input ke database foto mobil
                //Notifikasi sukses update
                Flasher::setFlash_modal('Data Kendaraan telah berhasil diperbarui.', 'Data Kendaraan Diperbarui!', 'success');
                //header('location: ' . BASEURL . '/mobil/data_mobil');
                exit;
            }
            else{
                Flasher::setFlash_modal('Kesalahan, data Kendaraan gagal untuk diperbarui.', 'Data Kendaraan gagal ditambahkan!', 'danger');
                header('location: ' . BASEURL . '/mobil/data_mobil');
                exit;
            } 
        }
        //Input ke database
        if ($this->model('Rental_model')->update_mobil($_POST)) {
            Flasher::setFlash_modal('Data Kendaraan telah berhasil diperbarui.', 'Data Kendaraan Diperbarui!', 'success');
            header('location: ' . BASEURL . '/mobil/data_mobil');
            exit;
        }
        header('location: ' . BASEURL . '/mobil/data_mobil');
    }
/*
    public function data_type()
    {
        echo 'Ini halaman admin/data_type';
    } */
}