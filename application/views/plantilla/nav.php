  <div class="container-fluid bg-dark p-2 mb-3">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <?php echo anchor('/inicio','SchoolMusical','class="navbar-brand"');?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
          <ul class="navbar-nav">
          <?php echo anchor('/inicio','Inicio','class="nav-link"');?>
        </li>

        <!--Navegacion de Alumnos Lista-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Alumnos</a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li>
              <?php echo anchor('alumnos/show','Listar Alumnos','class="dropdown-item"');?>
              <?php echo anchor('alumnos/save','Ingresar Alumnos','class="dropdown-item"');?>
            </li>
          </ul>
        </li>

         <!--Navegacion de Matriculas Lista-->
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Matricula</a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li>
              <?php echo anchor('matricula/show','Listar matricula','class="dropdown-item"');?>
              <?php echo anchor('matricula/save','Ingresar marticula','class="dropdown-item"');?>
            </li>
          </ul>
        </li>

            
        <!--Navegacion de Empleados Lista-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Empleados</a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li>
              <?php echo anchor('empleados/show','Listar Empleados','class="dropdown-item"');?>
              <?php echo anchor('empleados/save','Ingresar Empleados','class="dropdown-item"');?>
            </li>
          </ul>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Clases</a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li>
              <?php echo anchor('clases/show','Listar clases','class="dropdown-item"');?>
              <?php echo anchor('clases/save','Ingresar Clase','class="dropdown-item"');?>
            </li>
          </ul>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Control de Notas</a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li>
              <?php echo anchor('notas/show','Listar notas','class="dropdown-item"');?>
              <?php echo anchor('notas/save','Ingresar nota','class="dropdown-item"');?>
            </li>
          </ul>
        </li>

        <a class="nav-link " href="<?=site_url('login/logout')?>" role="button"  aria-expanded="false">Cerrar Sesión</a>
          
          

          </ul>

        </div>
      </div>

    </nav>

  </div>
