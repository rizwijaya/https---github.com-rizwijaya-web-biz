<?php


class App {
    protected $controller = 'Home';     //Variable dapat diakses di dalam kelas atau turunannya.
    protected $method = 'index';
    protected $params = [];
    public function __construct() 
    {
        $url = $this->parseURL();   //Melakukan Parse URL
        if($url == NULL)          
               {
                $url = [$this->controller];    
        }
        //controller    //Memeriksa apakah ada file/folder controller di url[0]
        if( file_exists('../app/controllers/' . $url[0] . '.php') ) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;  //Menginisialisasi controller

        //method
        if(isset($url[1])) {    //Mengecek apakah $url[1] terdefinisi
            if( method_exists($this->controller, $url[1])) {   //Memeriksa apakah ada object
                $this->method = $url[1];
                unset($url[1]);
            }
        }


        //params
        if( !empty($url)) {         //Mengecek apakah variabel url kosong
            $this->params = array_values($url); //mengembalikan nilai url ke array
            //var_dump($url);
        }

        //jalankan controller dan method, serta kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL() {    //Fungsi Parse UrL
        if( isset($_GET['url'])) {  //Mengecek apakah variabel url sudah terdefinisi
            $url = rtrim($_GET['url'],'/'); //Membuang karakter / dari url
            $url = filter_var($url, FILTER_SANITIZE_URL);  //Melakukan filter url 
            $url = explode('/', $url);  //Merubah tanda pemisah / dan url menjadi array
            return $url;
        }
    }
}