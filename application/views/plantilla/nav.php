<body>

  <div class="container-fluid bg-dark p-2 mb-3">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <?php echo anchor('/inicio','SchoolMusical','class="navbar-brand"');?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
          <ul class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="">Inicio</a>
        </li>
        


            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Alumnos</a>
          <ul class="dropdown-menu dropdown-menu-dark">
          <li class="dropdown-item">
                        <?php echo anchor('alumnos/show','Listar Alumnos','class="nav-link"');?>
          </li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Matriculas
          </a>
          <!---Lista de Matriculas Menu--> 
          <ul class="dropdown-menu dropdown-menu-dark">
          <li><a class="dropdown-item" href="">Matricula del Alumno</a></li>
            <li><a class="dropdown-item" href="">Ingresar Nueva Matricula</a></li>
          
          </ul>
        </li>

            

            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Empleados</a>
          <ul class="dropdown-menu dropdown-menu-dark">
          <li>
            <a class="dropdown-item" href="">Lista de Empleados</a>
          </li>
            <li>
              <a class="dropdown-item" href="">Ingresar Empleados</a>
            </li>
          </ul>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Clases</a>
          <ul class="dropdown-menu dropdown-menu-dark">
          <li>
            <a class="dropdown-item" href="">Lista de Clases</a>
          </li>
            <li>
              <a class="dropdown-item" href="">Ingresar Clases</a>
            </li>
          </ul>
        </li>


            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Control de Notas
              </a>

              <!---Lista de Notas Menu-->
              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="">Notas del Alumno</a></li>
                <li><a class="dropdown-item" href="">Ingresar Nueva Nota</a></li>
              </ul>
            </li>
          
          

          </ul>

        </div>
      </div>

    </nav>

  </div>
  <div class="container-fluid"></div>
    </br>
</body>