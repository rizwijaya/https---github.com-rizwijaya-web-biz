<?php

class kendaraan extends Controller 
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
        $data['title'] = "Data Kendaraan";
        $data['menu'] = "Kendaraan";
        $data['submenu'] = "Data Kendaraan";
        $data['mobil'] = $this->model('rental_model')->getallkendaraan();
        $data['type'] = $this->model('rental_model')->getalltype();
        $this->view('templates/admin/header');
        $this->view('templates/admin/sidebar',$data);
        $this->view('admin/kendaraan',$data);
        $this->view('templates/admin/footer');
    }
    
    public function tambah_Kendaraan()
    {
        //Konversi input fitur ke variabel fitur
        $fitur['ac'] = isset($_POST['1']) ? 1 : 0;  //Inisialisasi terdapat fitur atau tidak
        $fitur['anti_lock'] = isset($_POST['2']) ? 1 : 0;
        $fitur['music_player'] = isset($_POST['3']) ? 1 : 0;
        $fitur['video_player'] = isset($_POST['4']) ? 1 : 0;
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
            if ($this->model('Rental_model')->tambah_kendaraan($_POST, $name, $fitur) > 0) {    //Menambahkan ke database
                Flasher::setFlash_modal('Data Kendaraan telah berhasil ditambahkan.', 'Data Kendaraan Ditambahkan!', 'success');
                    header('location: ' . BASEURL . '/kendaraan');
                    exit;
                } else {
                    Flasher::setFlash_modal('Kesalahan, data Kendaraan gagal untuk ditambahkan.', 'Data Kendaraan gagal ditambahkan!', 'danger');
                    header('location: ' . BASEURL . '/kendaraan');
                    exit;
                } 
        }else{
            Flasher::setFlash_modal('Kesalahan, data Kendaraan gagal untuk ditambahkan.', 'Data Kendaraan gagal ditambahkan!', 'danger');
            header('location: ' . BASEURL . '/kendaraan');
            exit;
        }
    }

    public function detail($id)
    {
        $data['id_grup'] = $_SESSION['id_grup'];
        $data['title'] = "Detail Kendaraan";
        $data['menu'] = "Kendaraan";
        $data['submenu'] = "Detail Kendaraan";
        $data['detail'] = $this->model('Rental_model')->detailKendaraan($id);
        $this->view('templates/admin/header');
        $this->view('templates/admin/sidebar',$data);
        $this->view('admin/detail_kendaraan', $data);
        $this->view('templates/admin/footer');
    }

    public function delete($id)
    {
        //Ambil data foto kendaraan dengan Id
       $data = $this->model('rental_model')->getFotoById($id);
        //Mengecek Apakah ada foto kendaraan
        if(is_file("foto_mobil/".$data['gambar'])) {
            unlink("foto_mobil/".$data['gambar']); //Hapus jika ada foto
        }
        //Ambil data mobil dari database gambar, selanjutnya hapus
        if ($this->model('rental_model')->hapusDataKendaraan($id) > 0) {
            Flasher::setFlash_modal('Data Kendaraan telah berhasil dihapus.', 'Data Kendaraan Dihapus!', 'success');
            header('location: ' . BASEURL . '/kendaraan');
            exit;
        } else {
            Flasher::setFlash_modal('Kesalahan, data Kendaraan gagal untuk dihapus.', 'Data Kendaraan gagal dihapus!', 'danger');
            header('location: ' . BASEURL . '/kendaraan');
            exit;
        }
    }

    public function update()
    {
        $temp = $_FILES['gambar']['tmp_name'];
        if($temp) { //Mengecek apakah form terdapat gambar
            //Inisialisasi Data Gambar
            $name = rand(0,9999).$_FILES['gambar']['name'];
            $size = $_FILES['gambar']['size'];
            $type = $_FILES['gambar']['type'];
            $folder = "foto_mobil/";
            //Ambil data foto kendaraan lama dengan Id
            $oldgambar = $this->model('rental_model')->getFotoById($_POST['id_mobil']);
            //Melakukan pengecekan ukuran file dan format
            if ($size < 2048000 and ($type =='image/jpeg' or $type == 'image/png' or $type == 'image/jpg')) {
                move_uploaded_file($temp, $folder . $name); //Melakukan upload foto ke folder/nama
                //Mengecek Apakah ada foto kendaraan Lama
                if(is_file("foto_mobil/".$oldgambar['gambar'])) {
                    unlink("foto_mobil/".$oldgambar['gambar']); //Hapus foto kendaraan lama
                }
                $this->model('Rental_model')->update_foto_kendaraan($name, $_POST); //Input ke database foto mobil
                //Notifikasi sukses update
                Flasher::setFlash_modal('Data Kendaraan telah berhasil diperbarui.', 'Data Kendaraan Diperbarui!', 'success');
                header('location: ' . BASEURL . '/kendaraan');
                exit;
            }
            else{
                Flasher::setFlash_modal('Kesalahan, data Kendaraan gagal untuk diperbarui.', 'Data Kendaraan gagal ditambahkan!', 'danger');
                header('location: ' . BASEURL . '/kendaraan');
                exit;
            } 
        }
        //Input ke database
        if ($this->model('Rental_model')->update_kendaraan($_POST)) {
            Flasher::setFlash_modal('Data Kendaraan telah berhasil diperbarui.', 'Data Kendaraan Diperbarui!', 'success');
            header('location: ' . BASEURL . '/kendaraan');
            exit;
        }
        header('location: ' . BASEURL . '/kendaraan');
    }

    public function data_type()
    {
        $data['id_grup'] = $_SESSION['id_grup'];
        $data['title'] = "Tipe Kendaraan";
        $data['menu'] = "Kendaraan";
        $data['submenu'] = "Tipe Kendaraan";
        $data['type'] = $this->model('rental_model')->getalltype();
        $this->view('templates/admin/header');
        $this->view('templates/admin/sidebar',$data);
        $this->view('admin/tipe_kendaraan',$data);
        $this->view('templates/admin/footer');
    }

    public function tambah_tipe()
    {
            if ($this->model('Rental_model')->tambah_tipe($_POST) > 0) {    //Menambahkan ke database
                Flasher::setFlash_modal('Data Tipe Kendaraan telah berhasil ditambahkan.', 'Data Tipe Kendaraan Ditambahkan!', 'success');
                    header('location: ' . BASEURL . '/kendaraan/data_type');
                    exit;
                } else {
                    Flasher::setFlash_modal('Kesalahan, data tipe Kendaraan gagal untuk ditambahkan.', 'Data tipe Kendaraan gagal ditambahkan!', 'danger');
                    header('location: ' . BASEURL . '/kendaraan/data_type');
                    exit;
                }
    }

    public function update_tipe()
    {
            //Input ke database 
            if ($this->model('Rental_model')->update_tipe($_POST)) {
                Flasher::setFlash_modal('Data Tipe Kendaraan telah berhasil diperbarui.', 'Data Tipe Kendaraan diperbarui!', 'success');
                    header('location: ' . BASEURL . '/kendaraan/data_type');
                    exit;
                } else {
                    Flasher::setFlash_modal('Kesalahan, data tipe Kendaraan gagal untuk diperbarui.', 'Data tipe Kendaraan gagal diperbarui!', 'danger');
                    header('location: ' . BASEURL . '/kendaraan/data_type');
                    exit;
                }
    }

    public function deletetipe($id)
    {
            //var_dump($_POST); die;
            //Input ke database 
        if ($this->model('rental_model')->deletetipe($id) > 0) {
            Flasher::setFlash_modal('Data Tipe Kendaraan telah berhasil dihapus.', 'Data Tipe Kendaraan Dihapus!', 'success');
            header('location: ' . BASEURL . '/kendaraan/data_type');
            exit;
        } else {
            Flasher::setFlash_modal('Kesalahan, data tipe Kendaraan gagal untuk dihapus.', 'Data Tipe Kendaraan gagal dihapus!', 'danger');
            header('location: ' . BASEURL . '/kendaraan/data_type');
            exit;
        }
    }
}