
  <div class="row"  >
    
      <!-- FORM PARA AGREGAR A LOS USUARIOS-->
      <br>      
      <form id="modaform" method="POST" action="#" role="form" >
       <span ><i class="material-icons ">contacts <h6>REGISTRO</h6></i></span>
       
        <div class="input-field col s12 ">
          <label for="usuario">Nombre</label>
          <input type="text" id="usuario" name="usuario" required="llenar campo" class="form-control">
        </div>
                <div class="input-field col s12 ">
         <label for="email">Correo</label>
           <input id="correo" type="email" name="correo" required="llenar campo" class="form-control"><br>
        </div>
        <div class="input-field col s12 ">
          <label for="contraseña">Contraseña</label>
          <input type="password" name="contrasena" required="llenar campo" class="form-control" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{3,15}$" title="Esta contraseña debe contener letras, números, guiones bajos y puntos, y tener entre 3 y 15 caracteres de longitud" required>
        </div>
        <div class="input-field col s12 ">
          <label for="contraseña">Confirmar Contraseña</label>
          <input type="password" name="contrasena" required="llenar campo" class="form-control">
        </div>

      
      
           <div class="input-field col s12">
            <input TYPE="submit" form="modaform" NAME=OK VALUE="REGISTRAR" class="btn btn-default" style="margin-right: 20px;">
            <a href="index.php">
              <input TYPE="reset" onclick="window.close();" NAME="button" VALUE="Cerrar" class="modal-action modal-close waves-effect  btn btn-#d32f2f red darken-2 " style="margin-left: 20px;"></a> 
           <br>
          </div>
        
    

    </form>


</div>





      
        
        
    

  
  

