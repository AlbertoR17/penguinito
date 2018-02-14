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
				
						<li><a href="#"><i class="material-icons left">add</i>Registrarse</a></li>
					</ul>
				</div>
			</nav>
		</section>
	</header>

	<!-- inico de contenido -->
	<section class="contenido wrapper">
		<?php include("notas.php"); ?>
		<?php include("footer.php"); ?>
		
	</section>
	<!-- fin de contenido -->
	
</body>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>

</html>