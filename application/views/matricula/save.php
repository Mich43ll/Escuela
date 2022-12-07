<h1 style= text-align:center>Ingresar Alumno Matriculado</h1>
<form action="<?php anchor("matricula/save") ?>"  method ="POST" autocomplete="off">
  <div class="inset">
  <div style="color:#a94442;background-color:#f2dede;border-color:#ebccd1; border-radius:5px"><?php echo validation_errors();?></div>
  <p>
    <label for="text">Id Alumno</label>
    <input type="text" name="IdAlumno" required>
  </p>

  <p>
    <label for="text">Jornada</label>
    <input type="text" name="Jornada"required>
  </p>

  <p>
    <label for="text">Id del Grado</label>
    <input type="text" name="idGrado"required>
  </p>
  
  <button type="submit" class="btn btn-primary">Guardar</button>
  
    <?php echo anchor('matricula/show','Cancelar','class="btn btn-danger"');?>
 
  </div>


</form>