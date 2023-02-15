<?php

class Mahasiswa extends Controller{
    public function index(){
        $data['title'] = 'Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }
    
    public function detail($id){
        $data['title'] = 'Mahasiswa | Detail';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah(){
        if($this->model('Mahasiswa_model')->tambahMahasiswa($_POST) > 0 ){
            Flasher::SetFlash('Berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }else{
            Flasher::SetFlash('Gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
}