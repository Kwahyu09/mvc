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

    public function tambahMahasiswa($data){
        $query = "INSERT INTO mahasiswa VALUES ('', :nama, :npm, :email, :jurusan)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('npm', $data['npm']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
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