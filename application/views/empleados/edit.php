<?php
    require_once("C://xampp/htdocs/Escuela/controller/empleadosController.php");
    $obj = new empleadosController();
    $user = $obj->show($_GET['idEmpleado']);
?>
    <form action="update.php"  method ="POST" autocomplete="off">
        <h1>Modificando Registro de Empleado</h1>
        <div class="inset">

        <p>
            <label for="text">idEmpleado</label>
            <input type="text" name="idEmpleado" readonly  value="<?= $user[0]?>" >
        </p>

        <p>
            <label for="text">Nuevo Nombre</label>
            <input type="text" name="NombreCompleto" value="<?= $user[1]?>" >
        </p>

        <p>
            <label for="text">Nuevo idCargo</label>
            <input type="text" name="idCargo" value="<?= $user[2]?>">
        </p>

        <p>
            <label for="text">Nueva Direccion</label>
            <input type="text" name="Direccion" value="<?= $user[3]?>">
        </p>

        <p>
            <label for="text">Nuevao Telefono</label>
            <input type="text" name="Telefono" value="<?= $user[4]?>">
        </p>
        
        <p>
            <label for="text">Nuevo Estado</label>
            <input type="text" name="Estado" value="<?= $user[5]?>">
        </p>        
        </div>

        <div>
            <input type="submit" class="btn btn-success" value="Actualizar">
            <a class="btn btn-danger" href="show.php?idEmpleado=<?= $user[0]?>">Cancelar</a>
        </div>

    </form>



<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>