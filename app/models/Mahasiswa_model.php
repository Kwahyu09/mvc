<?php 
class Mahasiswa_model {
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        //untuk mengamankan query injeksion
        $this->db->query('SELECT * FROM '. $this->table.' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->single(); 
    }





    // private $mhs = [
    //     [
    //         "nama" => "Krisna Wahyudi",
    //         "npm" => "G1A019073",
    //         "email" => "krisnawahyudi2017@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Agnes Vera Nika",
    //         "npm" => "G1A020024",
    //         "email" => "agnes583@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Khairul",
    //         "npm" => "G1D019073",
    //         "email" => "khairul@gmail.com",
    //         "jurusan" => "Teknik Elektro"
    //     ]
    // ];

    
}