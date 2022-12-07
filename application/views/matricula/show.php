<div>
	<div>
	    <div>
            <?php echo '<h2 class="heading-section" style= text-align:center>';echo $titulo;'</h2>'; ?>
        </div>
    </div>
    <div>
		<div>
			<div>
                <table>
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">ID Alumno</th>
                            <th scope="col">Jornada</th>
                            <th scope="col">ID Grado</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($lista as $f){ ?>
                        <tr>
                            <td><?php echo $f['idMatricula'];?></td>
                            <td><?php echo $f['IdAlumno'];?></td>
                            <td><?php echo $f['Jornada'];?></td>
                            <td><?php echo $f['idGrado'];?></td>
                            <td><a href="<?php echo base_url();?>matricula/edit/<?php echo $f['idMatricula']; ?>" class="btn btn-primary">Editar</a>
                            <a href="<?php echo base_url();?>matricula/delete/<?php echo $f['idMatricula']; ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>  
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


