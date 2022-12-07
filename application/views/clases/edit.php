<h1 style= text-align:center>Modificando datos de notas</h1>
<form action="<?php echo base_url(); ?>index.php/clases/update"  method ="POST" autocomplete="off">
        <div class="inset">

        <p>
            <label >idClase</label>
            <input type="text" name="idClase" readonly  value="<?php echo $clase->idClase?>" >
        </p>

        <p>
            <label for="NombreClase">Nombre Clase</label>
            <input type="text" name="NombreClase" value="<?php echo $clase->NombreClase ?>" >
        </p>

        <p>
            <label for="Estado">Estado</label>
            <input type="text" name="Estado" value="<?php echo $clase->Estado ?>" >
        </p>

        <p>
            <label for="idEmpleado">idEmpleado</label>
            <input type="text" name="idEmpleado" value="<?php echo $clase->idEmpleado ?>">
        </p>      
        </div>

        <div>
            <input type="submit" class="btn btn-success" value="Actualizar">
            <?php echo anchor('clases/show','Cancelar','class="btn btn-danger"');?>
        </div>

    </form>