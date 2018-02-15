
<div class="ibox-content">
  <div class="row">
    <div class="col s12">
      <!-- FORM PARA AGREGAR A LOS USUARIOS-->
      <center> <h4>Registro</h4></center>
      <form id="modaform" method="POST" action="#" role="form" style="margin-left: 150px;">
       
       
        <div class="input-field col s10 m8">
          <label for="usuario">&nbsp;Nombre</label>
          <input type="text" id="usuario" name="usuario" required="llenar campo" class="form-control">
        </div>
        <div class="input-field col s10 m8">
          <label for="contraseña">&nbsp;Contraseña</label>
          <input type="password" name="contrasena" required="llenar campo" class="form-control" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{3,15}$" title="Esta contraseña debe contener letras, números, guiones bajos y puntos, y tener entre 3 y 15 caracteres de longitud" required>
        </div>
        <div class="input-field col s10 m8">
          <label for="contraseña">&nbsp;Confirmar Contraseña</label>
          <input type="password" name="contrasena" required="llenar campo" class="form-control">
        </div>
        <div class="input-field col s10 m8">
         <label for="email">&nbsp;Correo</label>
           <input id="correo" type="email" name="correo" required="llenar campo" class="form-control">
        </div>
      
      
        <center>
          <div class="row">
           <div class="input-field col s8">
            <input TYPE="submit" form="modaform" NAME=OK VALUE="REGISTRAR" class="btn btn-default">
            <a href="index.php"><input TYPE="button" onclick="window.close();" NAME="button" VALUE="Cerrar" class="modal-action modal-close waves-effect  btn btn-#d32f2f red darken-2 " > </a>
          </div>
        </div>
      </center>

    </form>
  </div>

</div>

</div>




      
        
        
    

  
  

