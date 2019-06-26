<?php


$dsn='mysql:host=localhost;dbname=autores;port=3306';
$opt=[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];
// $db=new PDO($dsn,'root','',$opt);


try {
  $db=new PDO($dsn,'root','',$opt);
  // $resultado=$base->prepare("INSERT INTO series values (default, 'GOT',1)");
} catch (\Exception $e) {
    echo "Ocurrio un error";
}
$idSerie=$_GET['id'];
$sql= "SELECT * FROM series WHERE id_titulo='$idSerie'";
$query=$db->prepare($sql);
$query->execute();

$programas=$query->fetchAll(PDO::FETCH_ASSOC);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php foreach ($programas as $programa): ?>
        <h1>Titulo de la serie: <?= $programa['titulo']  ?> </h1>

    <?php endforeach; ?>

    <!-- <form action="serie.php" method="get">
        Titulo de la Serie: <input type="text" name="id_serie" value="">

    </form> -->

  </body>
</html>
