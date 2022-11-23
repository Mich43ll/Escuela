<?php
    require_once("C://xampp/htdocs/Escuela/controller/notasController.php");
    $obj = new notasController();
    $obj ->delete($_GET['idNotas']);


?>



<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>