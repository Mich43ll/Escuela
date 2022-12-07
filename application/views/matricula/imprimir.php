<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriculas</title>
</head>
<body>
    <div>
    <table>
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">ID Alumno</th>
                            <th scope="col">Jornada</th>
                            <th scope="col">ID Grado</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($lista as $f){ ?>
                        <tr>
                            <td><?php echo $f['idMatricula'];?></td>
                            <td><?php echo $f['IdAlumno'];?></td>
                            <td><?php echo $f['Jornada'];?></td>
                            <td><?php echo $f['idGrado'];?></td>
                        </tr>  
                        <?php } ?>
                    </tbody>
                </table>
    </div>

    <script>window.addEventListener("load", window.print());</script>
</body>
</html>