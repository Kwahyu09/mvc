<?php

class App{
    public function __construct()
    {
        $url = $this->parseUrl();
        var_dump($url);
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