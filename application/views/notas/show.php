<div>
	<div>
	    <div>
            <?php echo '<h2 class="heading-section" style= text-align:center>';echo $titulo;'</h2>'; ?>
        </div>
        <div style= text-align:center>
                <?php echo  anchor('notas/imprimir','imprimir','class="btn btn-danger"');?>
                <?php echo anchor('notas/pdfalumnos','PDF','class="btn btn-danger"');?>
        </div>
    </div>
    <div>
		<div>
			<div>
                <table>
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Primer Parcial</th>
                            <th scope="col">Segundo Parcial</th>
                            <th scope="col">Tercer Parcial</th>
                            <th scope="col">Promedio</th>
                            <th scope="col">ID Clase</th>
                            <th scope="col">ID Alumno</th>
                            <th scope="col">ID Empleado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($lista as $f){ ?>
                        <tr>
                            <td><?php echo $f['idNotas'];?></td>
                            <td><?php echo $f['primerParcial'];?></td>
                            <td><?php echo $f['segundoParcial'];?></td>
                            <td><?php echo $f['tercerParcial'];?></td>
                            <td><?php echo round(($f['primerParcial']+$f['segundoParcial']+$f['tercerParcial'])/3,0);?></td>
                            <td><?php echo $f['idClase'];?></td>
                            <td><?php echo $f['idAlumno'];?></td>
                            <td><?php echo $f['idEmpleado'];?></td>
                            <td><a href="<?php echo base_url();?>notas/edit/<?php echo $f['idNotas']; ?>" class="btn btn-primary">Editar</a>
                            <a href="<?php echo base_url();?>notas/delete/<?php echo $f['idNotas']; ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>  
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


