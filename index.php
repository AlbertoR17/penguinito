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
					<a href="index.php" class="brand-logo"><img src="img/penguin.png" alt="" style="width: 60px;height: 60px"><span style="font-family: medium italic">Penguinito</span></a>
					<ul class="right hide-on-med-and-down" style="">
						<li >
						  <nav >
						    <div class="nav-wrapper">
						        <div class="input-field" >
						          <input id="search" type="search" required style="border: 0px;">
						          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
						          <i class="material-icons">close</i>
						        </div>
						      </form>
						    </div>
						  </nav>
						</li>
						<li><a class="waves-effect waves-light modal-trigger" href="#modal1" ><i class="material-icons left">add</i>Registrarse</a></li>
						
					</ul>
				</div>
			</nav>
		</section>
	</header>
		
<div id="modal1" class="modal" style="width: 35%;border-radius: 7px; box-shadow: 0px 0px 25px #000; overflow-y: hidden; overflow-x: hidden;">
    <center><div >
	 <?php include "modal.php" ?>
	 </div></center> 
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