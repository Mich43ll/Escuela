<!--ESTE ES UN MODELO BASADO EN LA BASE DE DATOS
LO QUE HARA ES TRAER LOS CAMPOS  QUE FUERON CREADOS EN 
MYSQL -->
<?php

//la clase notasModel es exactamente el archivo como lo tiene
class alumnosModel{
    private $PDO;
    public function __construct()
    {
        require_once("C://xampp/htdocs/Escuela/config/db.php");
        $con = new db();
        //ALMACENAR LA CONEXION LA QUE BUSCA EL METODO DE ESTO PARA RETORNAR LOS DATOS
        $this ->PDO= $con->conexion();
    }

    public function insertar($NombreCompleto, $Direccion, $Genero, $Edad, $Estado, $idGrado){
        $statement = $this->PDO->prepare("INSERT INTO alumnos (NombreCompleto, Direccion, Genero, Edad, Estado, idGrado) VALUES(:NombreCompleto,:Direccion,:Genero,:Edad,:Estado,:idGrado)");
        $statement->bindParam(":NombreCompleto",$NombreCompleto);
        $statement->bindParam(":Direccion",$Direccion);
        $statement->bindParam(":Genero",$Genero);
        $statement->bindParam(":Edad",$Edad);
        $statement->bindParam(":Estado",$Estado);
        $statement->bindParam(":idGrado",$idGrado);
        return ($statement->execute()) ? $this->PDO->lastInsertId(): false;
    
    }

    public function show($idAlumno){
        $statement = $this->PDO->prepare("SELECT * FROM alumnos where idAlumno = :idAlumno ");
        $statement->bindParam(":idAlumno", $idAlumno);
        return ($statement->execute()) ? $statement->fetch(): false;

    }
    public function index(){
        $statement = $this->PDO->prepare("SELECT * FROM alumnos");
        return ($statement->execute()) ? $statement->fetchAll() : false;
    }
    public function update($idAlumno, $NombreCompleto, $Direccion, $Genero, $Edad, $Estado, $idGrado){
        $statement = $this->PDO->prepare("UPDATE alumnos SET NombreCompleto = :NombreCompleto, Direccion = :Direccion, Genero = :Genero, Edad = :Edad, Estado = :Estado, idGrado = :idGrado WHERE idAlumno = :idAlumno ");
        $statement->bindParam(":NombreCompleto",$NombreCompleto);
        $statement->bindParam(":Direccion",$Direccion);
        $statement->bindParam(":Genero",$Genero);
        $statement->bindParam(":Edad",$Edad);
        $statement->bindParam(":Estado",$Estado);
        $statement->bindParam(":idGrado",$idGrado);
        $statement->bindParam(":idAlumno",$idAlumno);
        return ($statement->execute()) ? $idAlumno : false;
    }
    public function delete($idAlumno){
        $statement = $this->PDO->prepare("DELETE FROM alumnos where idAlumno = :idAlumno ");
        $statement->bindParam(":idAlumno", $idAlumno);
        return ($statement->execute()) ? true : false;

    }
    
}

?>