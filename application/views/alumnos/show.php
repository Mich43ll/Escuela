<?php
echo '<h2 class="text-center" style="color:white">';echo $titulo;'</h2>'; ?>

<link rel="stylesheet" href="/public/src/css/tablas.css">
<table class="table">
    <thead>
        <tr>
            <th scope="col">idAlumno</th>
            <th scope="col">NombreCompleto</th>
            <th scope="col">Direccion</th>
            <th scope="col">Genero</th>
            <th scope="col">Edad</th>
            <th scope="col">Estado</th>
            <th scope="col">idGrado</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
<?php foreach($lista as $f){ ?>
    <tr>
        <td><?php echo $f['idAlumno'];?></td>
        <td><?php echo $f['NombreCompleto'];?></td>
        <td><?php echo $f['Direccion'];?></td>
        <td><?php echo $f['Genero'];?></td>
        <td><?php echo $f['Edad'];?></td>
        <td><?php echo $f['Estado'];?></td>
        <td><?php echo $f['idGrado'];?></td>
        <td><?php ?></td>
    </tr>  
<?php } ?>
    </tbody>
</table>