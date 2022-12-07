<h1 style= text-align:center>Modificando Registro de la Matricula</h1>
<form action="<?php echo base_url(); ?>index.php/matricula/update"  method ="POST" autocomplete="off">
        <div class="inset">

        <p>
            <label >idMatricula</label>
            <input type="text" name="idMatricula" readonly  value="<?php echo $matricula->idMatricula?>" >
        </p>

        <p>
            <label for="IdAlumno">IdAlumno</label>
            <input type="text" name="IdAlumno" value="<?php echo $matricula->IdAlumno?>" >
        </p>

        <p>
            <label for="Jornada">Jornada</label>
            <input type="text" name="Jornada" value="<?php echo $matricula->Jornada?>" >
        </p> 
        
        <p>
            <label for="idGrado">idGrado</label>
            <input type="text" name="idGrado" value="<?php echo $matricula->idGrado?>">
        </p>        
        </div>

        <div>
            <input type="submit" class="btn btn-success" value="Actualizar">
            <?php echo anchor('matricula/show','Cancelar','class="btn btn-danger"');?>
        </div>

    </form>