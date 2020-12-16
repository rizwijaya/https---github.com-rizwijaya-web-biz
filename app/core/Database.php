<?php

class Database {
    private $host = DB_HOST;    //Deklarasi private variabel
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    private $dbh;
    private $stmt;

    public function __construct() 
    {
        //data source name
        $dsn = 'mysql:host='. $this->host . ';dbname=' . $this->db_name;

        $option = [
            PDO::ATTR_PERSISTENT => true,       //Mengaktifkan koneksi persistent
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION     //Melaporkan kesalahan
        ];
        //Mengecek apakah terdapat error
        try {
            //Membuat koneksi ke database
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
        } catch(PDOException $e) {      //Jika terjadi eror
            die($e->getMessage());      //Berhenti dan menampilkan pesan kesalahan
        }
    }

    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);  //Mensiapkan query (prepare)
    }

    public function bind($param, $value, $type = null) {
        if( is_null($type)) {   //Apakah type null
            switch( true ) {
                case is_int($value) :
                    $type = PDO::PARAM_INT;     //Type data integer
                    break;
                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;    //Type data Boolean
                    break;
                case is_null($value) :
                    $type = PDO::PARAM_NULL;    //Type data NULL
                    break;
                default :
                    $type = PDO::PARAM_STR;     //Type data String
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute()   //Melakukan eksekusi query
    {
        $this->stmt->execute();
    }

    public function resultSet() 
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC); //Mengembalikan dengan nama kolom 
    }

    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC); //Mengembalikan dengan nama kolom 
    }

    public function rowCount()
    {
        return $this->stmt->rowCount();
    }

    public function singleOBJ() {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);  //Mengembalikan object anonim dengan nama properti
    }
}