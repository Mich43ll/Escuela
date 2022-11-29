<h1 style= text-align:center>Modificando Registro del Alumno</h1>
<form action="<?php echo base_url(); ?>index.php/alumnos/update"  method ="POST" autocomplete="off">
        <div class="inset">

        <p>
            <label >idAlumno</label>
            <input type="text" name="idAlumno" readonly  value="<?php echo $alumno->idAlumno;?>" >
        </p>

        <p>
            <label for="NombreCompleto">NombreCompleto</label>
            <input type="text" name="NombreCompleto" value="<?php echo $alumno->NombreCompleto ?>" >
        </p>

        <p>
            <label for="Direccion">Direccion</label>
            <input type="text" name="Direccion" value="<?php echo $alumno->Direccion ?>" >
        </p>

        <p>
            <label for="Genero">Genero</label>
            <input type="text" name="Genero" value="<?php echo $alumno->Genero ?>">
        </p>

        <p>
            <label for="Edad">Edad</label>
            <input type="text" name="Edad" value="<?php echo $alumno->Edad ?>">
        </p>

        <p>
            <label for="Estado">Estado</label>
            <input type="text" name="Estado" value="<?php echo $alumno->Estado ?>">
        </p>
        
        <p>
            <label for="idGrado">idGrado</label>
            <input type="text" name="idGrado" value="<?php echo $alumno->idGrado ?>">
        </p>        
        </div>

        <div>
            <input type="submit" class="btn btn-success" value="Actualizar">
            <?php echo anchor('alumnos/show','Cancelar','class="btn btn-danger"');?>
        </div>

    </form>