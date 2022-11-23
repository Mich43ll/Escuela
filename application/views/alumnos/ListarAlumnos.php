<?php
    require_once("C://xampp/htdocs/Escuela/view/head/head.php");
    require_once("C://xampp/htdocs/Escuela/controller/alumnosController.php");
    $obj = new alumnosController();
    $rows = $obj->index();
?>
<link rel="stylesheet" href="./css/tablenota.css">
<h2 class="text-center">Lista de Alumnos</h2>
<table class="table">
    <thead>
        <tr>
            <th scope="col">NombreCompleto</th>
            <th scope="col">Direccion</th>
            <th scope="col">Genero</th>
            <th scope="col">Edad</th>
            <th scope="col">Estado</th>
            <th scope="col">idGrado</th>
        </tr>
    </thead>
    <tbody>
        <?php if($rows):?>
            <?php foreach($rows as $row): ?>
                <tr>
                    <th><?= $row[1] ?></th>
                    <th><?= $row[2] ?></th>
                    <th><?= $row[3] ?></th>
                    <th><?= $row[4] ?></th>
                    <th><?= $row[5] ?></th>
                    <th><?= $row[6] ?></th>
                    <th>
                        <a href="show.php?idAlumno=<?= $row[0] ?>" class="btn btn-primary">Ver</a>
                    </th>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="8" class="text-center">No hay Registros</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>



<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>