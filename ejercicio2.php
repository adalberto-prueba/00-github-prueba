<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<style>	
.direccion, .nombreEdad { background-color: aliceblue;
	color: grey;
	border:3px double #cacaa3;
	margin:50px auto; padding:30px;
	width:50%;
}
.nombreEdad { background-color: pink;
}

		</style>
		<title>pruebas PHP</title>
	</head>


<body>

<div style="width: 221px; background-color: tomato; height:100px, line-height:100px; color: white;">

</div>

<?php 
echo ('<ul class="nombreEdad"><li>'.$_GET["nombre"].'</li><li>'.$_GET["edad"].'</li></ul>');
?>
<?php
print ('<div class="direccion">Su dirección es : ' ) ;
print ($_POST["domicilio"]);
print ('</div>');
?>






</body>
</html>