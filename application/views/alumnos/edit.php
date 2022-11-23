<?php

    require_once("C://xampp/htdocs/Escuela/controller/alumnosController.php");
    $obj = new alumnosController();
    $user = $obj->show($_GET['idAlumno']);
?>
    <form action="update.php"  method ="POST" autocomplete="off">
        <h1>Modificando Registro de Alumno</h1>
        <div class="inset">

        <p>
            <label for="text">idAlumno</label>
            <input type="text" name="idAlumno" readonly  value="<?= $user[0]?>" >
        </p>

        <p>
            <label for="text">Nuevo Nombre</label>
            <input type="text" name="NombreCompleto" value="<?= $user[1]?>" >
        </p>

        <p>
            <label for="text">Nueva Direccion</label>
            <input type="text" name="Direccion" value="<?= $user[2]?>">
        </p>

        <p>
            <label for="text">Nuevo Genero</label>
            <input type="text" name="Genero" value="<?= $user[3]?>">
        </p>

        <p>
            <label for="text">Nueva Edad</label>
            <input type="text" name="Edad" value="<?= $user[4]?>">
        </p>
        
        <p>
            <label for="text">Nuevo Estado</label>
            <input type="text" name="Estado" value="<?= $user[5]?>">
        </p>

        <p>
            <label for="text">Nuevo idGrado</label>
            <input type="text" name="idGrado" value="<?= $user[6]?>">
        </p>        
        </div>

        <div>
            <input type="submit" class="btn btn-success" value="Actualizar">
            <a class="btn btn-danger" href="show.php?idAlumno=<?= $user[0]?>">Cancelar</a>
        </div>

    </form>



<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>