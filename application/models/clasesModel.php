<?php

//la clase notasModel es exactamente el archivo como lo tiene
class clasesModel{
    private $PDO;
    public function __construct()
    {
        require_once("C://xampp/htdocs/Escuela/config/db.php");
        $con = new db();
        //ALMACENAR LA CONEXION LA QUE BUSCA EL METODO DE ESTO PARA RETORNAR LOS DATOS
        $this ->PDO= $con->conexion();
    }

    public function insertar(  $NombreClase, $Estado, $idEmpleado ){
        $statement = $this->PDO->prepare("INSERT INTO Clase VALUES(null,:NombreClase,:Estado,:idEmpleado)");
        
        $statement->bindParam(":NombreClase",$NombreClase);
        $statement->bindParam(":Estado",$Estado);
        $statement->bindParam( ":idEmpleado",$idEmpleado);
    
        return ($statement->execute()) ? $this->PDO->lastInsertId(): false;
    
    }

    public function Visualizar($idClase){
            $statement = $this->PDO->prepare("select * from escuela.clase where idClase= :idClase limit 1");
            $statement ->bindParam(":idClase", $idClase);
            return($statement->execute()) ? $statement->fetch():false;
    }

    public function indexClase(){
            $statement = $this->PDO->prepare("select * from escuela.clase");
            return($statement->execute()) ? $statement -> fetchAll() : false;
    }

    public function update($idClase, $NombreClase, $Estado, $idEmpleado){
            $statement = $this->PDO->prepare("update escuela.clase
            set  NombreClase=:NombreClase, Estado=:Estado, idEmpleado=:idEmpleado where idClase=:idClase "); 

           
            $statement->bindParam( ":idClase",$idClase);
            $statement->bindParam( ":NombreClase",$NombreClase);
            $statement->bindParam(":Estado",$Estado);
            $statement->bindParam(":idEmpleado", $idEmpleado);
            return($statement->execute()) ? $idClase: false;
    }


    //PRUEBA
    public function indiceprueba(){
        $statement = $this->PDO->prepare("SELECT c.idClase, c.NombreClase, c.Estado, e.NombreCompleto FROM escuela.clase c 
        join escuela.empleados e on c.idEmpleado = e.idEmpleado;");
        return($statement->execute()) ? $statement -> fetchAll() : false;
}
    //PRUEBA




    public function delete($idClase){
        $statement = $this ->PDO->prepare("DELETE FROM clase  WHERE idClase = :idClase ");
        $statement->bindParam(":idClase",$idClase);
        return($statement->execute())? true : false;
    }


}

?>