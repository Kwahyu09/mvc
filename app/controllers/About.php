<?php

class About{

    public function index($nama = "Krisna", $pekerjaan = "Programmer")
    {
        echo "Hallo Nama saya $nama, pekerjaan : $pekerjaan";
    }

    public function page(){
        echo 'About/Page/';
    }
}