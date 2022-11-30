<h1 style= text-align:center>Modificando datos de notas</h1>
<form action="<?php echo base_url(); ?>index.php/notas/update"  method ="POST" autocomplete="off">
        <div class="inset">

        <p>
            <label >idNotas</label>
            <input type="text" name="idNotas" readonly  value="<?php echo $nota->idnota;?>" >
        </p>

        <p>
            <label for="primerParcial">primerParcial</label>
            <input type="text" name="primerParcial" value="<?php echo $nota->primerParcial ?>" >
        </p>

        <p>
            <label for="segundoParcial">segundoParcial</label>
            <input type="text" name="segundoParcial" value="<?php echo $nota->segundoParcial ?>" >
        </p>

        <p>
            <label for="tercerParcial">tercerParcial</label>
            <input type="text" name="tercerParcial" value="<?php echo $nota->tercerParcial ?>">
        </p>
        <p>
            <label for="Promedio">Promedio</label>
            <input type="text" name="Promedio" value="<?php echo $nota->Promedio ?>">
        </p>

        <p>
            <label for="idClase">idClase</label>
            <input type="text" name="idClase" value="<?php echo $nota->idClase ?>">
        </p>

        <p>
            <label for="idAlumno">idAlumno</label>
            <input type="text" name="idAlumno" value="<?php echo $nota->idAlumno ?>">
        </p>
        
        <p>
            <label for="idEmpleado">idEmpleado</label>
            <input type="text" name="idEmpleado" value="<?php echo $nota->idEmpleado ?>">
        </p>        
        </div>

        <div>
            <input type="submit" class="btn btn-success" value="Actualizar">
            <?php echo anchor('notas/show','Cancelar','class="btn btn-danger"');?>
        </div>

    </form>