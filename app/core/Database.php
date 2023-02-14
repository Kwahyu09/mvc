<?php

class Database{
    private $host = DB_HOST,
    $user = DB_USER,
    $pass = DB_PASS,
    $db_name = DB_NAME;
    
    //membuat koneksi databsae dengan vdio bukan dengan mysqli
    private $dbh;//database handler
    private $stmt;

    public function __construct()
    {
        //data source name
        $dsn = 'mysql:host=' . $this->host .';dbname=' . $this->db_name;

        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = null)
    {
        if(is_null($type))
        {
            //jika true type null
            switch( true ){
                // jika value bernilai intiger
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default :
                    $type = PDO::PARAM_STR;
                    break;

            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    //eksekusi
    public function execute()
    {
        $this->stmt->execute();
    }

    //jika ingin menampilkan data lebih dari satu
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //jika ingin menampilka data hanya satu
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

}