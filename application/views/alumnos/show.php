<div >
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
                                    <th scope="col">Direccion</th>
                                    <th scope="col">Genero</th>
                                    <th scope="col">Edad</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Grado</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($lista as $f){ ?>
                            <tr>
                                <td><?php echo $f['idAlumno'];?></td>
                                <td><?php echo $f['NombreCompleto'];?></td>
                                <td><?php echo $f['Direccion'];?></td>
                                <td><?php echo $f['Genero'];?></td>
                                <td><?php echo $f['Edad'];?></td>
                                <td><?php echo $f['Estado'];?></td>
                                <td><?php echo $f['idGrado'];?></td>
                                <td><?php echo anchor('alumnos/edit','Modificar','class="btn btn-primary"');?>
                                    <?php echo anchor('alumnos/delete','Eliminar','class="btn btn-danger"');?>
                                </td>
                            </tr>  
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
</div>


