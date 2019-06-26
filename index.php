<?php

require_once '../mysql/conect.php';

try {
  $resultado= $db->query("SELECT * FROM movies");

} catch (PDOException $error) {
    $mensaje=$error->getMessage();
    $codigo=$eror->getCode();

    echo ("Ocurrio un error en la DB");
    die();
}
$movies = $resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
	<title>Sistema biblioteca - Autores</title>
	<meta charset="utf-8">
	<style type="text/css">
		body { font-family: sans-serif; font-size:15px; }
		article { margin:0 10px; margin-bottom:20px; display:inline-block; vertical-align:top; width:20%; padding:10px; background-color:#eee; }
		div { margin-bottom:5px; }
	</style>
</head>
<body>
	<h1>Autores</h1>
	<div>
		<a href="formulario.php">CREAR NUEVO AUTOR</a>
	</div>
	<?php foreach($movies as $movie) { ?>
		<article>
			<div>
				<label>Nombre:</label> <strong><?php echo $movie['nombre'] ?></strong>
			</div>
			<div>
				<label>Apellido:</label> <strong><?php echo $movie['apellido'] ?></strong>
			</div>
			<div>
				<label>Edad:</label> <strong><?php echo $movie['edad'] ?></strong>
			</div>
			<div>
				<a href="eliminar.php?id=<?php echo $movie['id'] ?>" style="color:red;">ELIMINAR</a>
			</div>
		</article>
	<?php } ?>
</body>
</html>
