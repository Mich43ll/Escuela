

<h1 style= text-align:center>Ingresar notas</h1>
<form action="<?php anchor("notas/save") ?>"  method ="POST" autocomplete="off">
  <div class="inset">

  <p>
    <label for="text">Primer Parcial</label>
    <input type="text" name="primerParcial" >
  </p>

  <p>
    <label for="text">Segundo Parcial</label>
    <input type="text" name="segundoParcial">
  </p>

  <p>
    <label for="text">Tercer Parcial</label>
    <input type="text" name="tercerParcial" >
  </p>
  
  <p>
    <label for="text">idClase</label>
    <input type="text" name="idClase">
  </p>
  <p>
    <label for="text">idAlumno</label>
    <input type="text" name="idAlumno">
  </p>
  <p>
    <label for="text">idEmpleado</label>
    <input type="text" name="idEmpleado">
  </p>

  
  <button type="submit" class="btn btn-primary">Guardar</button>
  
    <?php echo anchor('/inicio','Cancelar','class="btn btn-danger"');?>
 
  </div>



</form>