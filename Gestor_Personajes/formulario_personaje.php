<?php
include("valida.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Crea a tu personaje</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8/">
  <link rel="stylesheet" type="text/css" href="estilo_formulario_personaje.css">
</head>

<body>
  <a href="cerrar.php"> Cerrar Sesion</a>

<h1>Crea tu personaje</h1>
<form action="enviar_datos_personaje.php" method="get">

  <m>Genero:</m><br>
  <input type="radio" name="genero" value="masculino" checked> Masculino<br>
  <input type="radio" name="genero" value="femenino"> Femenino<br>
  <input type="radio" name="genero" value="otro"> Otro
  <br><br>
  Nombre:<br>
  <input type="text" name="nombre" placeholder="Nombre">
  <br>
  Raza:<br>
  <input type="text" name="raza" placeholder="Raza">
  <br>
  Clase:<br>
  <input type="text" name="clase" placeholder="Clase">
  <br>
  Fuerza:<br>
  <input type="number" name="fuerza">
  <br>
  Destreza:<br>
  <input type="number" name="destreza">
  <br>
  Salud:<br>
  <input type="number" name="salud">
  <br>
  Resistencia:<br>
  <input type="number" name="resistencia">
  <br>
  Inteligencia:<br>
  <input type="number" name="inteligencia">
  <br>
  Sabiduria:<br>
  <input type="number" name="sabiduria">
  <br>
  Carisma:<br>
  <input type="number" name="carisma">
  <br>
  Habilidades:<br>
  <input type="text" name="habilidades" placeholder="Habilidades">
  <br>
  <br><br>
  <input type="submit" value="Guardar">
</p>
</form>


</body>
</html>