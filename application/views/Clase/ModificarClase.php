<?php

require_once("C://xampp/htdocs/Escuela/view/head/head.php");
require_once("C://xampp/htdocs/Escuela/controller/clasescontroller.php");
$obj = new clasesController();
$filas= $obj->indexClase();
$nota = $obj  ->visualizar($_GET['idClase']);


?>


<a  href="ModificarClase.php?idClase=<?=$fila[0] ?>"  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Modificar</a>
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
                            <input type="idAlumno" class="form-control" id="idClase" aria-describedby="Clase" value="<?=$nota[0]?>">
                       
                        </div>

                

                        <div class="mb-3">
                            <label for="text" class="form-label">Nombre Clase</label>
                            <input type="idAlumno" class="form-control" id="" aria-describedby="">
                       
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Estado</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                       
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Id Empleado</label>
                            <input type="email" class="form-control" id="idEmpleado" aria-describedby="Empleado">
                       
                        </div>

                       
                     
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




<!------>


<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>