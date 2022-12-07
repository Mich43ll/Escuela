

<h1 style= text-align:center>Ingresar notas</h1>
<form action="<?php anchor("notas/save") ?>"  method ="POST" autocomplete="off">
  <div class="inset">
  <div style="color:#a94442;background-color:#f2dede;border-color:#ebccd1; border-radius:5px"><?php echo validation_errors();?></div>
  <p>
    <label for="text">Primer Parcial</label>
    <input type="text" name="primerParcial" required>
  </p>

  <p>
    <label for="text">Segundo Parcial</label>
    <input type="text" name="segundoParcial" required>
  </p>

  <p>
    <label for="text">Tercer Parcial</label>
    <input type="text" name="tercerParcial" required>
  </p>
  
  <p>
    <label for="text">idClase</label>
    <input type="text" name="idClase" required>
  </p>
  <p>
    <label for="text">idAlumno</label>
    <input type="text" name="idAlumno" required>
  </p>
  <p>
    <label for="text">idEmpleado</label>
    <input type="text" name="idEmpleado" required>
  </p>

  
  <button type="submit" class="btn btn-primary">Guardar</button>
  
    <?php echo anchor('notas/show','Cancelar','class="btn btn-danger"');?>
 
  </div>

</form>
