<!--ESTE ES UN MODELO BASADO EN LA BASE DE DATOS
LO QUE HARA ES TRAER LOS CAMPOS  QUE FUERON CREADOS EN 
MYSQL -->
<?php

//la clase notasModel es exactamente el archivo como lo tiene
class pruebaModel{
    private $PDO;
    public function __construct()
    {
        require_once("C://xampp/htdocs/Escuela/config/db.php");
        $con = new db();
        //ALMACENAR LA CONEXION LA QUE BUSCA EL METODO DE ESTO PARA RETORNAR LOS DATOS
        $this ->PDO= $con->conexion();
    }

    public function insertar($prueba ){
        $statement = $this->PDO->prepare("INSERT INTO prueba VALUES(null,:prueba)");
        $statement->bindParam(":prueba",$prueba);
        return ($statement->execute()) ? $this->PDO->lastInsertId(): false;
    
    }
    
}

?>