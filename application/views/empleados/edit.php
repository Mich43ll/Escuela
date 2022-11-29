<h1 style= text-align:center>Modificando Registro del Empleado</h1>
<form action="<?php echo base_url(); ?>index.php/empleados/update"  method ="POST" autocomplete="off">
        <div class="inset">

        <p>
            <label >idEmpleado</label>
            <input type="text" name="idEmpleado" readonly  value="<?php echo $empleado->idEmpleado;?>" >
        </p>

        <p>
            <label for="NombreCompleto">NombreCompleto</label>
            <input type="text" name="NombreCompleto" value="<?php echo $empleado->NombreCompleto ?>" >
        </p>

        <p>
            <label for="idCargo">idCargo</label>
            <input type="text" name="idCargo" value="<?php echo $empleado->idCargo ?>" >
        </p>

        <p>
            <label for="Direccion">Direccion</label>
            <input type="text" name="Direccion" value="<?php echo $empleado->Direccion ?>">
        </p>

        <p>
            <label for="Telefono">Telefono</label>
            <input type="text" name="Telefono" value="<?php echo $empleado->Telefono ?>">
        </p>

        <p>
            <label for="Estado">Estado</label>
            <input type="text" name="Estado" value="<?php echo $empleado->Estado ?>">
        </p>
      
        </div>

        <div>
            <input type="submit" class="btn btn-success" value="Actualizar">
            <?php echo anchor('empleados/show','Cancelar','class="btn btn-danger"');?>
        </div>

    </form>