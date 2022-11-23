<?php
require_once("C://xampp/htdocs/Escuela/view/head/head.php");
require_once("C://xampp/htdocs/Escuela/controller/notasController.php");
$obj = new notasController();
$rows= $obj->indiceprueba();



?>
<link rel="stylesheet" href="../../assets/plugins/dist/sweetalert2.min.css" >
<link rel="stylesheet" href="../../assets/plugins/dist/sweetalert2.css" >
<script src="../../assets/plugins/dist/sweetalert2.all.min.js"></script>
<script src="../../assets/plugins/dist/sweetalert2.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="./css/tablenota.css">
<script src="./js/tablenota.js"></script>




<h1>Notas de los Alumnos</h1>
<div class="mb-3">
        <a href="/Escuela/view/notas/IngresarNota.php" class="btn btn-success">Agregar nuevo registro</a>
</div>





<table class="table table-hover">
   <!--ENCABEZADO DE LA TABLA--> 
        <thead >
            <tr  >
            <th scope="col">ID</th>
            <th scope="col" >ALUMNO</th>
            <th scope="col">CLASE</th>
            <th scope="col">PRIMER PARCIAL</th>
            <th scope="col">SEGUNDO PARCIAL</th>
            <th scope="col">TERCER PARCIAL</th>
            <th scope="col">PROMEDIO</th>
            <th scope="col">MAESTRO</th>
            <th scope="col" width="22%"  rowspan="4">ACCIONES</th>
     
            </tr>
        </thead>
       <!--ENCABEZADO DE LA TABLA--> 

        <!--CONTENIDO DE LA TABLA--> 

        <tbody>
            <?php if($rows): ?>
            <!------------------------------------------------>
                <?php foreach($rows as $row): ?>
            <!------------------------------------------------>
                            <tr >
                                <th scope="col" ><?= $row[0] ?></th>
                                <th scope="col"><?= $row[6] ?></th>
                                <th scope="col"><?= $row[5] ?></th>
                                <th scope="col"><?= $row[1] ?></th>
                                <th scope="col"><?= $row[2] ?></th>
                                <th scope="col"><?= $row[3] ?></th>
                                <th scope="col"><?= $row[4] ?></th>
                                <th scope="col"><?= $row[7] ?></th>
                                    
                                <!------ACCIONES A REALIZAR--------------->
                      
                                <td style="text-align: center;" >
                                    <a href="VerIdNotas.php?idNotas=<?=$row[0]?>" class="btn btn-primary">Ver</a>
                                    
                                </td>            
                                <!------------------MODAL ELIMINAR---------------->
                                <!------ACCIONES A REALIZAR--------------->
                                
                            </tr>
            <!------------------------------------------------>
                <?php endforeach; ?>
            <!------------------------------------------------>
            <?php else: ?>

                <tr>
                    <td colspan="9" class="text-center">No hay registros acutalmente</td>
                </tr>
            <!------------------------------------------------> 
            <?php endif; ?>

            <!------------------------------------------------>

        </tbody>
        <!--CONTENIDO DE LA TABLA--> 
</table>









<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>