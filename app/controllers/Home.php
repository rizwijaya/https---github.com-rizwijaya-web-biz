<?php

class Home extends Controller {
    
    public function index()
    {
       if($_SESSION) {
            $this->redirecting();
        }
        $data['mobil'] = $this->model('rental_model')->getallkendaraan();
        $this->view('templates/pelanggan/header');
        $this->view('home/index', $data);
        $this->view('templates/pelanggan/footer');
    }

    public function depan()
    {
        $data['mobil'] = $this->model('rental_model')->getallkendaraan();
        $this->view('templates/pelanggan/header');
        $this->view('home/index', $data);
        $this->view('templates/pelanggan/footer');
    }

    public function redirecting()
    {
        //var_dump($_SESSION); die;
        if(!$_SESSION) {
            header('location:' . BASEURL . '/home');
        }
        switch($_SESSION['id_grup']) {
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
        if($_SESSION) {
            $this->redirecting();
        }
        
        $data = NULL;
        $this->view('templates/pelanggan/header');
        $this->view('home/login', $data);
        $this->view('templates/pelanggan/footer');
    }

    public function register()
    {
        if($_SESSION) {
            $this->redirecting();
        }
        
        $data = NULL;
        $this->view('templates/pelanggan/header');
        $this->view('home/register', $data);
        $this->view('templates/pelanggan/footer');
    }

    public function detail($id)
    {
        if($_SESSION) {
            $this->redirecting();
        }
        $data['detail'] = $this->model('rental_model')->getdetailkendaraan($id);
        $data['mobil'] = $this->model('rental_model')->getallkendaraan();
        $this->view('templates/pelanggan/header');
        $this->view('home/detailkendaraan', $data);
        $this->view('templates/pelanggan/footer');

    }
}