<!--ESTE ES UN MODELO BASADO EN LA BASE DE DATOS
LO QUE HARA ES TRAER LOS CAMPOS  QUE FUERON CREADOS EN 
MYSQL -->
<?php

//la clase notasModel es exactamente el archivo como lo tiene
class empleadosModel{
    private $PDO;
    public function __construct()
    {
        require_once("C://xampp/htdocs/Escuela/config/db.php");
        $con = new db();
        //ALMACENAR LA CONEXION LA QUE BUSCA EL METODO DE ESTO PARA RETORNAR LOS DATOS
        $this ->PDO= $con->conexion();
    }

    public function insertar($NombreCompleto, $idCargo, $Direccion, $Telefono, $Estado){
        $statement = $this->PDO->prepare("INSERT INTO empleados (NombreCompleto, idCargo, Direccion, Telefono, Estado) VALUES(:NombreCompleto,:idCargo,:Direccion,:Telefono,:Estado)");
        $statement->bindParam(":NombreCompleto",$NombreCompleto);
        $statement->bindParam(":idCargo",$idCargo);
        $statement->bindParam(":Direccion",$Direccion);
        $statement->bindParam(":Telefono",$Telefono);
        $statement->bindParam(":Estado",$Estado);
        return ($statement->execute()) ? $this->PDO->lastInsertId(): false;
    
    }

    public function show($idEmpleado){
        $statement = $this->PDO->prepare("SELECT * FROM empleados where idEmpleado = :idEmpleado ");
        $statement->bindParam(":idEmpleado", $idEmpleado);
        return ($statement->execute()) ? $statement->fetch(): false;

    }
    public function index(){
        $statement = $this->PDO->prepare("SELECT * FROM empleados");
        return ($statement->execute()) ? $statement->fetchAll() : false;
    }
    public function update($idEmpleado, $NombreCompleto, $idCargo, $Direccion, $Telefono, $Estado){
        $statement = $this->PDO->prepare("UPDATE empleados SET NombreCompleto = :NombreCompleto, idCargo = :idCargo, Direccion = :Direccion, Telefono = :Telefono, Estado = :Estado WHERE idEmpleado = :idEmpleado ");
        $statement->bindParam(":NombreCompleto",$NombreCompleto);
        $statement->bindParam(":idCargo",$idCargo);
        $statement->bindParam(":Direccion",$Direccion);
        $statement->bindParam(":Telefono",$Telefono);
        $statement->bindParam(":Estado",$Estado);
        $statement->bindParam(":idEmpleado",$idEmpleado);
        return ($statement->execute()) ? $idEmpleado : false;
    }
    public function delete($idEmpleado){
        $statement = $this->PDO->prepare("DELETE FROM empleados where idEmpleado = :idEmpleado ");
        $statement->bindParam(":idEmpleado", $idEmpleado);
        return ($statement->execute()) ? true : false;

    }
    
}

?>