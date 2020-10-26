<?php

class User_model {
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
        $q = "SELECT * FROM users WHERE username ='$username'";
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

    public function login($username, $password) { //Login query
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
}