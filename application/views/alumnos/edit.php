<h1 style= text-align:center>Modificando Registro del Alumno</h1>
<form action="<?php anchor("alumnos/save") ?>"  method ="POST" autocomplete="off">
        <div class="inset">

        <p>
            <label for="text">idEmpleado</label>
            <input type="text" name="idEmpleado" readonly  value="" >
        </p>

        <p>
            <label for="text">Nuevo Nombre</label>
            <input type="text" name="NombreCompleto" value="" >
        </p>

        <p>
            <label for="text">Nuevo idCargo</label>
            <input type="text" name="idCargo" value="">
        </p>

        <p>
            <label for="text">Nueva Direccion</label>
            <input type="text" name="Direccion" value="">
        </p>

        <p>
            <label for="text">Nuevao Telefono</label>
            <input type="text" name="Telefono" value="">
        </p>
        
        <p>
            <label for="text">Nuevo Estado</label>
            <input type="text" name="Estado" value="">
        </p>        
        </div>

        <div>
            <input type="submit" class="btn btn-success" value="Actualizar">
            <?php echo anchor('alumnos/show','Cancelar','class="btn btn-danger"');?>
        </div>

    </form>