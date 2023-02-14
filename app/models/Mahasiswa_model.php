<?php 
class Mahasiswa_model {
    //membuat koneksi databsae dengan vdio bukan dengan mysqli
    private $dbh;//database handler
    private $stmt;

    public function __construct()
    {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa(){
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
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