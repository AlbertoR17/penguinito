<!DOCTYPE html>
<html>
<head>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>penguinito</title>
</head>

<body style="background-color: #eeeeee;">
	<header>
		<section class="wrapper">
			<nav>
				<div class="nav-wrapper">
					<a href="index.php" class="brand-logo"><img src="img/penguin.png" alt="" style="width: 60px;height: 60px"></a>
					&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; Penguinito
					<ul class="right hide-on-med-and-down">
						<li><a href="#"><i class="material-icons left">search</i>Buscar</a></li>
				
						<li><a class="waves-effect waves-light modal-trigger" href="#modal1"><i class="material-icons left">add</i>Registrarse</a></li>
						
					</ul>
				</div>
			</nav>
		</section>
	</header>
		<!-- Modal Structure -->
		<div id="modal1" class="modal">
			<div class="modal-content">
				<h4>Registrarse</h4>
				<form class="form-group" action="#" method="post">
					<div class="form-control">
					  <label>Nombre</label>
					  <input class="form-control error"  type="text" name="name">
					</div>
					<div class="form-control">
                      <label>Contraseña</label>
					  <input class="form-control error"  type="password" name="pass">
				    </div>
					<div class="form-control">
					  <label>Confirma Contraseña</label>
					  <input class="form-control error"  type="password" name="pass2">
					</div>
					<div class="form-control">
					  <label>Correo</label>
					  <input type="email" name="correo" class="form-control error" >
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Aceptar</a>
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
			</div>
		</div>
	<!-- inico de contenido -->
	<section class="contenido wrapper">
		<?php include("notas.php"); ?>
		<?php include("footer.php"); ?>
		
	</section>
	<!-- fin de contenido -->
	

</body>
<!--Import jQuery before materialize.js-->

<script type="text/javascript" src="js/materialize.min.js"></script>

<script src="js/jquery.min.js"></script>
<script src="js/materialize.min.js"></script>
<script type="text/javascript">
	  $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();

  });
   
</script>

</html>