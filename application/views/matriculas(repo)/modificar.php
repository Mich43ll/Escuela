<?php

require_once("C://xampp/htdocs/Escuela/view/head/head.php");
require_once("C://xampp/htdocs/Escuela/controller/matriculascontroller.php");
$obj = new matriculasController();
$filas= $obj->indexmatricula();
$nota = $obj  ->visualizar($_GET['idMatricula']);


?>


<a  href="modificar.php?idMatricula=<?=$fila[0] ?>"  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Modificar</a>
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
                            <input type="idMatricula" class="form-control" id="idMatricula" aria-describedby="Clase" value="<?=$nota[0]?>">
                       
                        </div>

                

                        <div class="mb-3">
                            <label for="text" class="form-label">ID ALUMNO</label>
                            <input type="IdAlumno" class="form-control" id="" aria-describedby="">
                       
                        </div>

                        <div class="mb-3">
                            <label for="texto" class="form-label">JORNADA</label>
                            <input type="Jornada" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                       
                        </div>

                        <div class="mb-3">
                            <label for="texto" class="form-label">ID GRADO</label>
                            <input type="idGrado" class="form-control" id="idGrado" aria-describedby="Empleado">
                       
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