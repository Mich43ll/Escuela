<h1 style= text-align:center>Ingresar Alumno Matriculado</h1>
<form action="<?php anchor("matricula/save") ?>"  method ="POST" autocomplete="off">
  <div class="inset">

  <p>
    <label for="text">ID DEL ALUMNO</label>
    <input type="text" name="IdAlumno" >
  </p>

  <p>
    <label for="text">JORNADA</label>
    <input type="text" name="Jornada">
  </p>

  <p>
    <label for="text">ID DEL GRADO</label>
    <input type="text" name="idGrado" >
  </p>
  
  <button type="submit" class="btn btn-primary">Guardar</button>
  
    <?php echo anchor('matricula/show','Cancelar','class="btn btn-danger"');?>
 
  </div>


</form>