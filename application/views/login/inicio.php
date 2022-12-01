<h1 style= "margin-top:200px; text-align:center;">Inicio de Sesion</h1>
<form action="<?php anchor("inicio/inicio") ?>"  method ="POST" autocomplete="off">
  <div class="inset">

  <p>
    <label for="text">Usuario</label>
    <input type="text" name="username" >
  </p>

  <p>
    <label for="password">Contraseña</label>
    <input type="password" name="password">
  </p>
  
  <button type="submit" class="btn btn-primary">Iniciar Sesión</button>    
 
  </div>


</form>