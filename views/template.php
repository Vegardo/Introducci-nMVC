<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="utf-8">
	<title>Plantilla</title>
	<style>
		@import url('https://fonts.googleapis.com/css?family=VT323');
		header{
			text-align: center;
			margin: 30px;
		}
		body{
			background-color: aliceblue;
		}
		header h1{
			-webkit-animation:2s efecto;
		}
		@-webkit-keyframes efecto{
			10%{
				font-size: small;
			}
		}
		nav{
			background-color: rgba(120,54,85,1);
			font-family: "VT323", monospace;
			font-size: 20px;
			height: auto;
			margin: auto;
			position: relative;
			width: 100%;
			border-radius: 5px;
		}
		nav ul{
			position: relative;
			margin: auto;
			width: 50%;
			text-align: center;
		}
		nav ul li{
			display: inline-block;
			width: 20%;
			list-style: none;
			line-height: 50px;
		}
		nav ul li a{
			text-decoration: none;
			color: white;
		}
		nav ul li a:hover{
			text-decoration: none;
			color: black;
		}
		h2{
			color:#000;
			font-family: "VT323", monospace;
			font-size: 35px;
			margin-top: 10px;
		}
	</style>
</head>
<body>
<header>
	<h1>Template</h1>
</header>
<?php
include "views/modules/navigation.php" #podemos modular el template con el metodo include 
?>
<section>
	<?php
     $b = new MvcController();#creamos un objeto a partir de la clase MvcController
     $b -> enlacesPaginaControlador();#ejecutamos la función que se encuentra en esa clase
	?>
</section>
</body>
</html>