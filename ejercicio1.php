<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<style>	
body {background-color: tan;
}

		</style>
		<title>pruebas PHP</title>
	</head>


<body>
<?php print('<h2 style="color:orange;">Esto está escrito en PHP</h2>');

echo 'y esto con echo PHP "adasd" <div style="height:30px; width:44px; background-color: olive">aaa</div>';
?>
<h1>y esto en HTML</h1>
<div style="width: 1px; height:100px"></div>
<?php

$codigo = <<<EOT
<p>Este texto puede tener dentro "comillas" sin necesidad
de escaparlas.</p>
<p>También procesa (reemplaza por su valor) las $variables
que hubiera dentro del código, tema que veremos próximamente.</
p>
<p>Esta construcción del lenguaje llamada heredoc es ideal
para incluir largos bloques de código HTML.</p>
EOT;


echo $codigo;

echo $codigo;

echo $codigo;

?>
<a href="ejercicio2.php?nombre=Adalberto&amp;edad=42">Enlace</a>
<a href="ejercicio2.php?nombre=Dan&amp;edad=32">Enlace Brother</a>
<form style="margin:100px; padding:50px; background-color:aliceblue; border: 3px double violet;"  action="ejercicio2.php" method="post">
<input type="text" name="domicilio" />
<input type="submit" value="Enviar" />
</form>


</body>
</html>