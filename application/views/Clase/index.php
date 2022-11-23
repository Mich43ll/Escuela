<?php

require_once("C://xampp/htdocs/Escuela/view/head/head.php");
require_once("C://xampp/htdocs/Escuela/controller/clasescontroller.php");
$obj = new clasesController();
$filas= $obj->indexClase();
//$nota = $obj->visualizar($_GET['idClase']);

?>
<link rel="stylesheet" href="./css/form.css">
<div class=mb-3>
    
<a href="/escuela/view/Clase/IngresarClase" class="btn btn-outline-light">Ingresar Clase</a>
</div>


<table class=" table caption-top table-secondary table-bordered border-dark table-responsive">
  <caption>Listado de clases</caption>
  <thead class="table-dark table-bordered border-dark">
    <tr>
      <th scope="col">Nombre Clase</th>
      <th scope="col">Estado</th>
      <th scope="col">Id Empleado</th>
    
    </tr>
  </thead>
  <!--FINAL DEL HEAD-->


  <!--INICIO DEL BODY-->
  <tbody>
      <?php if($filas):?>
        <?php foreach($filas as $fila): ?>

                 <tr>
                <th ><?= $fila[0] ?></th>
                <th scope="col"><?= $fila[6] ?></th>
                <th scope="col"><?= $fila[5] ?></th>
                <th scope="col"><?= $fila[1] ?></th>
                <th scope="col"><?= $fila[2] ?></th>
                <th scope="col"><?= $fila[3] ?></th>
                <th scope="col"><?= $fila[4] ?></th>
                <th scope="col"><?= $fila[7] ?></th>
       
                <th>
                    <a href="show.php?idNotas=<?=$fila[0] ?>" class="btn btn-primary">Visualizar</a>
          <a href="ModificarNota.php?idNotas=<?=$fila[0] ?>" class="btn btn-success">Modificar</a> 
          
          <a  href="indexnotas.php?idNotas=<?=$fila[0] ?>"  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Modificar</a>

                    <!--- MODAL MODIFICAR-->
                

                    <div class="modal fade" id="exampleModal" tabindex="-5" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar Clase</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" >


                        <form action="update.php" method="post" autocomplete="off" class="col-auto" >


                        <div class="mb-3">
                            <label for="text" class="form-label">ID</label>
                            <input type="idAlumno" class="form-control" id="idEmpleado" aria-describedby="Empleado" value="<?=$fila[0]?>">
                       
                        </div>

                

                        <div class="mb-3">
                            <label for="text" class="form-label">Nombre Clase</label>
                            <input type="idAlumno" class="form-control" id="idClase" aria-describedby="Clase" value="<?=$fila[6]?>">
                       
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Estado</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$fila[7]?>">
                       
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Id Empleado</label>
                            <input type="email" class="form-control" id="idEmpleado" aria-describedby="Empleado" value="<?=$fila[5]?>">
                       
                       
                
                     
                        </form>
	
                    </div>

                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Send message</button>
                        </div>


                        </div>
                    
                        </div>
                    </div>
                    </div>



                    <!---MODAL MODIFICAR-->


                    <a href="EliminarNota.php?idNotas=<?=$fila[0] ?>" class="btn btn-danger">Eliminar</a>
                    
                    
                </th>
                
                </tr>
        <?php endforeach; ?>


        <?php else: ?>

            <tr>
                <td colspan="3" class="text-center">No hay registros</td>
            </tr>

        <?php endif; ?>
      
  </tbody>
</table>





<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>