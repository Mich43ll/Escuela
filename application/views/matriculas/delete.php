<?php
    require_once("C://xampp/htdocs/Escuela/controller/matriculascontroller.php");
    $obj = new matriculasController();
    $obj->delete($_GET['idMatricula']);


?>



<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>