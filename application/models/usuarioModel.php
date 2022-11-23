<?php
require '/application/config/db.php';

class UsuarioModel extends db{
    function __construct(){
        parent::__construct();
    }


    function validarUsuario($usuario,$password){
        $para=$this->con->prepare("select * from usuario where Usuario=? and Contraseña=?");
        $a =$usuario;
        $b =$password;
        $para->bind_param('ss',$a,$b);
        $para->execute();
        while($para->fetch()){
            return 1;
        }
        return 0;
    }
}
?>