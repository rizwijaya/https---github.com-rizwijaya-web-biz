<?php

class User_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    //Find user by email. Email is passed in by the Controller.
    public function findUserByEmail($email)
    {
        $q = "SELECT * FROM users WHERE email ='$email'";
        $this->db->query($q);
        return $this->db->single();
    }

    public function findUserByUsername($username)
    {
        $q = "SELECT nama, email FROM users WHERE username ='$username'";
        $this->db->query($q);
        return $this->db->single();
    }

    public function insertUser($data)
    {
        $query = "INSERT INTO users VALUES ('', :id_grup, :username, :password, :nama, :email, now())";
        $this->db->query($query);

        //Bind Values
        $this->db->bind(':id_grup', $data['id_grup']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':nama', $data['nama']);
        $this->db->bind(':email', $data['email']);
        $this->db->execute();

        //Mengambil Id_User
        $user = $this->insert_id($data);
        $peran = $data['id_grup'];

        if ($peran == '1') { // admin
            //Memasukkan data ke table admin
            $query = "INSERT INTO admin VALUES ('', :id_user, now(), now())";
            $this->db->query($query);
            //Bind Values
            $this->db->bind(':id_user', $user['id_user']);
            $this->db->execute();
        } else if ($peran == '2') { //pegawai
            $query = "INSERT INTO pegawai VALUES ('', :id_user)";
            $this->db->query($query);
            //Bind Values
            $this->db->bind(':id_user', $user['id_user']);
            $this->db->execute();
        } else {                    //Pelanggan
            $query = "INSERT INTO pelanggan VALUES ('', :id_user,'','','','','')";
            $this->db->query($query);
            //Bind Values
            $this->db->bind(':id_user', $user['id_user']);
            $this->db->execute();
        }
        return $user['id_user'];
    }
    //Function Mengambil Id_User dari email
    public function insert_id($data)
    {
        $email = $data['email'];
        $this->db->query('SELECT id_user FROM users WHERE email=:email');

        $this->db->bind('email', $email);
        return $this->db->single();
    }

    public function login($username, $password)
    { //Login query
        $this->db->query('SELECT * FROM users WHERE username = :username');

        //Bind value
        $this->db->bind(':username', $username);

        $row = $this->db->singleOBJ();

        $hashedPassword = $row->password;

        if (password_verify($password, $hashedPassword)) {
            return $row;
        } else {
            return false;
        }
    }

    public function getallpelanggan()
    {
        $this->db->query('SELECT t1.nama, t1.email, t2.photo, t2.no_telepon, t2.alamat, t2.gender, t2.no_ktp FROM users t1 INNER JOIN pelanggan t2 ON t1.id_user=t2.id_user');
        return $this->db->resultSet();
    }
    public function getallpegawai()
    {
        $this->db->query('SELECT username, nama, email FROM users WHERE id_grup=2');
        return $this->db->resultSet();
    }

    public function getlengkap($id)
    {
        $q = "SELECT no_ktp FROM pelanggan WHERE id_user ='$id'";
        $this->db->query($q);
        return $this->db->single();
    }

    public function getNama($id)
    {
        $q = "SELECT nama FROM users WHERE id_user ='$id'";
        $this->db->query($q);
        return $this->db->single();
    }

    public function lengkap_profile($data, $photo)
    {
        $query = "UPDATE pelanggan SET
            alamat = :alamat, 
            gender = :gender, 
            no_telepon = :no_telepon, 
            no_ktp = :no_ktp,
            photo = :photo
        WHERE id_user= :id_user";

        $this->db->query($query);
        $this->db->bind('id_user', $data['id_user']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('gender', $data['gender']);
        $this->db->bind('no_telepon', $data['no_telepon']);
        $this->db->bind('no_ktp', $data['no_ktp']);
        $this->db->bind('photo', $photo);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
