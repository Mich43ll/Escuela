<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
</head>
<body>
    <div>
        <table>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Grado</th>
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
                </tr>  
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script>window.addEventListener("load", window.print());</script>
</body>
</html>