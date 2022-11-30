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
                            <th scope="col">Nombre</th>
                            <th scope="col">idCargo</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($lista as $f){ ?>
                        <tr>
                            <td><?php echo $f['idEmpleado'];?></td>
                            <td><?php echo $f['NombreCompleto'];?></td>
                            <td><?php echo $f['idCargo'];?></td>
                            <td><?php echo $f['Direccion'];?></td>
                            <td><?php echo $f['Telefono'];?></td>
                            <td><?php echo $f['Estado'];?></td>
                            <td><a href="<?php echo base_url();?>empleados/edit/<?php echo $f['idEmpleado']; ?>" class="btn btn-primary">Editar</a>
                            <a href="<?php echo base_url();?>empleados/delete/<?php echo $f['idEmpleado']; ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>  
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>