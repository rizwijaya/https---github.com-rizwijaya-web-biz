<?php

class Users extends Controller 
{
    
    public function regist_pelanggan()
    {
        $data = 3;
        $this->insertNewUser($data);
    }

    public function insertNewUser($id_grup)
    {
        $data = [
            'id_grup' => '',
            'username' => '',
            'password' => '',
            'confirmPassword',
            'nama' => '',
            'email' => '',
            'usernameError' => '',
            'passwordError' => '',
            'confirmPasswordError' => '',
            'namaError' => '',
            'emailError' =>''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
                  $data = [
                    'id_grup' => $id_grup,
                    'username' => trim($_POST['username']),
                    'password' => trim($_POST['password']),
                    'confirmPassword' => trim($_POST['confirmPassword']),
                    'nama' => trim($_POST['nama']),
                    'email' => trim($_POST['email']),
                    'usernameError' => '',
                    'passwordError' => '',
                    'confirmPasswordError' => '',
                    'namaError' => '',
                    'emailError' =>''
                ];

                $nameValidation = "/^[a-zA-Z0-9]*$/";
                $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

                //Validate username on letters/numbers
                if (empty($data['username'])) {
                    $data['usernameError'] = 'Silakan masukkan username.';
                } elseif (!preg_match($nameValidation, $data['username'])) {
                    $data['usernameError'] = 'Username hanya boleh berisi huruf dan angka.';
                } else {
                    $username = $this->model('User_model')->findUserByUsername($data['username']);
                    if(!empty($username)) {
                        $data['usernameError'] = 'Username Tidak Tersedia.'; 
                    }
                }

                
                // Validate password on length, numeric values,
                if(empty($data['password'])){
                $data['passwordError'] = 'Silakan masukkan kata sandi.';
                } elseif(strlen($data['password']) < 8){
                $data['passwordError'] = 'Kata sandi minimal harus 8 karakter';
                } elseif (preg_match($passwordValidation, $data['password'])) {
                $data['passwordError'] = 'Kata sandi harus memiliki setidaknya satu huruf besar.';
                }
 
                //Validate confirm password
                if (empty($data['confirmPassword'])) {
                    $data['confirmPasswordError'] = 'Silakan masukkan kata sandi.';
                } else {
                    if ($data['password'] != $data['confirmPassword']) {
                    $data['confirmPasswordError'] = 'Kata sandi tidak cocok, silakan coba lagi.';
                    }
                }

                //Validate nama
                if (empty($data['nama'])) {
                    $data['namaError'] = 'Silahkan masukkan nama.';
                }
        
                //Validate email
                if (empty($data['email'])) {
                    $data['emailError'] = 'Silakan masukkan alamat email.';
                } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                    $data['emailError'] = 'Silahkan masukkan format yang benar.';
                } else {
                    $email = $this->model('User_model')->findUserByEmail($data['email']);
                    if(!empty($email)) {
                        $data['emailError'] = 'Email Tidak Tersedia.'; 
                    }
                }
            // Make sure that errors are empty
            if (empty($data['usernameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError']) && empty($data['namaError']) && empty($data['emailError'])) {

                // Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //Register user from model function
                if ($this->model('User_model')->insertUser($data)) {
                    //Redirect to the login page    
                    Flasher::setFlash('Pendaftaran', ' berhasil! Silahkan Login', 'success');
                    $this->view('templates/pelanggan/header');
                    $this->view('home/login', $data);
                    $this->view('templates/pelanggan/footer');
                } else {
                    Flasher::setFlash('Ada yang', 'salah', 'danger');
                    $this->view('templates/pelanggan/header');
                    $this->view('home/register', $data);
                    $this->view('templates/pelanggan/footer');
                    die;
                }
            }
        }
        $this->view('templates/pelanggan/header');
        $this->view('home/register', $data);
        $this->view('templates/pelanggan/footer');
    }

    public function login() {
        $data = [
            'title' => 'Login page',
            'username' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => ''
        ];

        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'usernameError' => '',
                'passwordError' => '',
            ];
            //Validate username
            if (empty($data['username'])) {
                $data['usernameError'] = 'Silahkan masukan username.';
            }

            //Validate password
            if (empty($data['password'])) {
                $data['passwordError'] = 'Silahkan masukan password.';
            }

            //Check if all errors are empty
            if (empty($data['usernameError']) && empty($data['passwordError'])) {
                $loggedInUser = $this->model('User_model')->login($data['username'], $data['password']);
                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['passwordError'] = 'Kata sandi atau nama pengguna salah. Silakan coba lagi.';
                    $this->view('templates/pelanggan/header');
                    $this->view('home/login', $data);
                    $this->view('templates/pelanggan/footer');
                }
            }

        } else {
            $data = [
                'username' => '',
                'password' => '',
                'usernameError' => '',
                'passwordError' => ''
            ];
        }
        $this->view('templates/pelanggan/header');
        $this->view('home/index');
        $this->view('templates/pelanggan/footer');
    }

    public function createUserSession($user) {
        //Melakukan set session
        $_SESSION['id_user'] = $user->id_user;
        $_SESSION['id_grup'] = $user->id_grup;
        $_SESSION['username'] = $user->username;
        $_SESSION['email'] = $user->email;
        if($_SESSION['id_grup'] == '1') //Redirect Ke halaman Admin
        {
            header('location:' . BASEURL . '/dashboard');
        } elseif ($_SESSION['id_grup'] == '2'){ //Redirect Ke halaman Pegawai
            header('location:' . BASEURL . '/dashboard');
        } else { //Redirect Ke halaman Pelanggan
            header('location:' . BASEURL . '/pelanggan');
        }
    }

    public function logout() {
        //Menghapus session
        unset($_SESSION['id_user']);
        unset($_SESSION['id_grup']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        header('location:' . BASEURL . '/home/index');
    }
}