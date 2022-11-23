<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Escuela de Musica


  </title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

  <div class="container-fluid bg-dark p-2 mb-3">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Escuela</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
          <ul class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="/escuela/index.php">Inicio</a>
        </li>
        


            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Alumnos</a>
          <ul class="dropdown-menu dropdown-menu-dark">
          <li>
            <a class="dropdown-item" href="/escuela/view/alumnos/ListarAlumnos.php">Lista de Alumnos</a>
          </li>
            <li>
              <a class="dropdown-item" href="/escuela/view/alumnos/IngresarAlumno.php">Ingresar Alumno</a>
            </li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Matriculas
          </a>
          <!---Lista de Matriculas Menu--> 
          <ul class="dropdown-menu dropdown-menu-dark">
          <li><a class="dropdown-item" href="/escuela/view/matriculas/indexmatricula.php">Matricula del Alumno</a></li>
            <li><a class="dropdown-item" href="/escuela/view/matriculas/create.php">Ingresar Nueva Matricula</a></li>
          
          </ul>
        </li>

            

            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Empleados</a>
          <ul class="dropdown-menu dropdown-menu-dark">
          <li>
            <a class="dropdown-item" href="htdocs/Escuela/application/views/empleados/ListarEmpleados.php">Lista de Empleados</a>
          </li>
            <li>
              <a class="dropdown-item" href="/escuela/view/empleados/IngresarEmpleado.php">Ingresar Empleados</a>
            </li>
          </ul>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Clases</a>
          <ul class="dropdown-menu dropdown-menu-dark">
          <li>
            <a class="dropdown-item" href="/escuela/view/Clase/indexClase.php">Lista de Clases</a>
          </li>
            <li>
              <a class="dropdown-item" href="/escuela/view/Clase/IngresarClase.php">Ingresar Clases</a>
            </li>
          </ul>
        </li>


            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Control de Notas
              </a>

              <!---Lista de Notas Menu-->
              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="/escuela/view/notas/indexNota.php">Notas del Alumno</a></li>
                <li><a class="dropdown-item" href="/escuela/view/notas/IngresarNota.php">Ingresar Nueva Nota</a></li>
              </ul>
            </li>
          
          

          </ul>

        </div>
      </div>

    </nav>

  </div>


  <div class="container-fluid">
    </br>