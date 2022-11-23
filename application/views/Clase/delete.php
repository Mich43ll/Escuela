<?php
    require_once("C://xampp/htdocs/Escuela/controller/clasescontroller.php");
    $obj = new clasesController();
    $obj ->delete($_GET['idClase']);


?>



<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>