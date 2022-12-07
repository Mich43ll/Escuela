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
                            <th scope="col">Nombre Clase</th>
                            <th scope="col">Estado</th>
                            <th scope="col">ID Empleado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($lista as $f){ ?>
                        <tr>
                            <td><?php echo $f['idClase'];?></td>
                            <td><?php echo $f['NombreClase'];?></td>
                            <td><?php echo $f['Estado'];?></td>
                            <td><?php echo $f['idEmpleado'];?></td>

                            <td><a href="<?php echo base_url();?>clases/edit/<?php echo $f['idClase']; ?>" class="btn btn-primary">Editar</a>
                            <a href="<?php echo base_url();?>clases/delete/<?php echo $f['idClase']; ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>  
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


