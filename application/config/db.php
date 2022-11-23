<?php
require 'parametros.php';
class db{
    private $host = "localhost";
    private $dbname = "escuela";
    private $user = "root";
    private $password= "Admin123";

    public function conexion(){
        try{
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->user, $this->password);
                return $PDO;
        }
        catch(PDOException $e){
            return $e-> getMessage();
        }
    }
    protected $con;
    function __construct(){
        $this->con=new mysqli(SERVER,USER,PASSWORD,BASE);
    }

}

?>