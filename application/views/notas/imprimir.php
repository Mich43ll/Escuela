<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas de los Alumnos</title>
</head>
<body>
    <div>
    <table>
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Primer Parcial</th>
                            <th scope="col">Segundo Parcial</th>
                            <th scope="col">Tercer Parcial</th>
                            <th scope="col">Promedio</th>
                            <th scope="col">ID Clase</th>
                            <th scope="col">ID Alumno</th>
                            <th scope="col">ID Empleado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($lista as $f){ ?>
                        <tr>
                            <td><?php echo $f['idNotas'];?></td>
                            <td><?php echo $f['primerParcial'];?></td>
                            <td><?php echo $f['segundoParcial'];?></td>
                            <td><?php echo $f['tercerParcial'];?></td>
                            <td><?php echo round(($f['primerParcial']+$f['segundoParcial']+$f['tercerParcial'])/3,0);?></td>
                            <td><?php echo $f['idClase'];?></td>
                            <td><?php echo $f['idAlumno'];?></td>
                            <td><?php echo $f['idEmpleado'];?></td>
                            </td>
                        </tr>  
                        <?php } ?>
                    </tbody>
                </table>
    </div>

    <script>window.addEventListener("load", window.print());</script>
</body>
</html>