<?php

class App{
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];
    protected $url = true;

    public function __construct()
    {   
        //membuat controller
        // mengecek file yang ada di folder controller
        $url = $this->parseUrl();
        if($url === null){
            $url[] = 'index';
        }
        if( file_exists('../app/controllers/' . $url[0] . '.php') ){
            $this->controller = $url[0];
            //menghilangkan url dari elemen array
            unset($url[0]);
        }
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;


        //membuat method
        if( isset($url[1])){
            //mengecek ada atau tidak method pada controller yang ada
            if( method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //kelola parameter
        //jika tidak kosong url
        if( !empty($url)){
            //mengambil nilai yang ada diurl selain controler dan method 
            $this->params = array_values($url);
        }
        //jalankan controller & method, kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params ); 
    } 

    public function parseUrl(){
        if( isset($_GET['url'])){
            //rtrim untuk menghilangkan / diakhir url
            $url = rtrim($_GET['url'], '/');

            //membersihkan url dari karakter basing
            $url = filter_var($url, FILTER_SANITIZE_URL);

            //URL dipecah berdasarkan tanda /
            $url = explode('/', $url);
            return $url;
        }
    }
}