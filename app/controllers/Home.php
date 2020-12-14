<?php

class Home extends Controller
{

    public function index()
    {
        if ($_SESSION) {
            $this->redirecting();
        }
        $data['mobil'] = $this->model('rental_model')->getallkendaraan();
        $this->view('templates/pelanggan/header');
        $this->view('home/index', $data);
        $this->view('templates/pelanggan/footer');
    }

    public function landing()
    {
        $data['mobil'] = $this->model('rental_model')->getallkendaraan();
        $this->view('templates/pelanggan/header');
        $this->view('home/index', $data);
        $this->view('templates/pelanggan/footer');
    }

    public function redirecting()
    {
        //var_dump($_SESSION); die;
        if (!$_SESSION) {
            header('location:' . BASEURL . '/home');
        }
        switch ($_SESSION['id_grup']) {
            case 1:
                header('location:' . BASEURL . '/dashboard');
                break;
            case 2:
                header('location:' . BASEURL . '/dashboard');
                break;
            case 3:
                header('location:' . BASEURL . '/pelanggan');
                break;
            default:
                header('location:' . BASEURL . '/home');
                break;
        }
        return;
    }

    public function login()
    {
        if ($_SESSION) {
            $this->redirecting();
        }

        $data = NULL;
        $this->view('templates/pelanggan/header');
        $this->view('home/login', $data);
        $this->view('templates/pelanggan/footer');
    }

    public function register()
    {
        if ($_SESSION) {
            $this->redirecting();
        }

        $data = NULL;
        $this->view('templates/pelanggan/header');
        $this->view('home/register', $data);
        $this->view('templates/pelanggan/footer');
    }

    public function detail($id)
    {
        $data['detail'] = $this->model('rental_model')->getdetailkendaraan($id);
        $data['mobil'] = $this->model('rental_model')->getallkendaraan();
        if (!empty($_SESSION['id_user'])) {
            if ($_SESSION['id_grup'] === 3) {
                $data['getlengkap'] = $this->model('user_model')->getlengkap($_SESSION['id_user']);
            } else {
                $data['getlengkap'] = NULL;
            }
        } else {
            $data['getlengkap'] = NULL;
        }

        $this->view('templates/pelanggan/header');
        $this->view('home/detailkendaraan', $data);
        $this->view('templates/pelanggan/footer');
    }

    public function sewa()
    {
        if (!$_SESSION) {
            Flasher::setFlash('Kendaraan gagal ditambahkan!', ' Silahkan login terlebih dahulu.', 'danger');
            $this->detail($_POST['id_mobil']);
            exit;
        }
        $getId = $this->model('rental_model')->getIdPelanggan($_SESSION['id_user']); //Get Id Pelanggan

        if ($this->model('rental_model')->tambah_sewa($_POST, $getId) > 0) {
            $sts = 0; //Status Mobil tidak tersedia
            $this->model('rental_model')->updateStatus($sts, $_POST['id_mobil']);
            Flasher::setFlash('Kendaraan berhasil ditambahkan!', ' Silahkan Checkout.', 'success');
            $this->detail($_POST['id_mobil']);
            exit;
        }
        Flasher::setFlash('Kesalahan,', ' kendaraan gagal ditambahkan!', 'danger');
        $this->detail($_POST['id_mobil']);
    }

    public function cari()
    {
        if ($_POST['kendaraan'] === 'pilih') {
            header('location:' . BASEURL . '/home');
        }
        $this->detail($_POST['kendaraan']);
    }

    public function lengkap_profile()
    {
        if (!$_SESSION) {
            $this->redirecting();
        } elseif ($_SESSION['id_grup'] == 1) {
            $this->redirecting();
        } elseif ($_SESSION['id_grup'] == 2) {
            $this->redirecting();
        }

        $cek = $this->model('user_model')->getlengkap($_SESSION['id_user']);
        if ($cek['no_ktp'] != NULL) {
            $this->redirecting();
        }

        $data = [
            'usernameError' => '',
            'passwordError' => '',
            'confirmPasswordError' => '',
            'alamatError' => '',
            'genderError' => '',
            'no_teleponError' => '',
            'no_ktpError' => '',
            'get_nama' => $this->model('user_model')->getNama($_SESSION['id_user'])
        ];

        $this->view('templates/pelanggan/header');
        $this->view('home/lengkap_profile', $data);
        $this->view('templates/pelanggan/footer');
    }

    public function aksi_lengkap()
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
            'id_user' => trim($_POST['id_user']),
            'alamat' => trim($_POST['alamat']),
            'gender' => trim($_POST['gender']),
            'no_telepon' => trim($_POST['no_telepon']),
            'no_ktp' => trim($_POST['no_ktp']),
            'alamatError' => '',
            'genderError' => '',
            'no_teleponError' => '',
            'no_ktpError' => ''
        ];

        //Inisialisasi Data Gambar
        $temp = $_FILES['gambar']['tmp_name'];
        $name = rand(0, 9999) . $_FILES['gambar']['name'];
        $size = $_FILES['gambar']['size'];
        $type = $_FILES['gambar']['type'];
        $folder = "foto_pelanggan/";
        //Melakukan pengecekan ukuran file dan format
        if ($size < 2048000 and ($type == 'image/jpeg' or $type == 'image/png' or $type == 'image/jpg')) {
            move_uploaded_file($temp, $folder . $name); //Melakukan upload ke folder/nama
            //Input ke database
            if ($this->model('User_model')->lengkap_profile($data, $name) > 0) {    //Menambahkan ke database
                Flasher::setFlash_modal('Profil berhasil dilengkapi.', 'Profil berhasil dilengkapi.!', 'success');
                header('location: ' . BASEURL . '/home');
                exit;
            } else {
                Flasher::setFlash_modal('Kesalahan!', 'Gagal melengkapi profile!', 'danger');
                header('location: ' . BASEURL . '/home');
                exit;
            }
        } else {
            Flasher::setFlash_modal('Kesalahan!', 'Gagal melengkapi profile!', 'danger');
            header('location: ' . BASEURL . '/home');
            exit;
        }
    }
}
