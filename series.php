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
$sql="SELECT * FROM series";
$resultado=$db->prepare($sql);
$resultado->execute();
$series=$resultado->fetchAll(PDO::FETCH_ASSOC);

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Series</title>
  </head>
  <body>
    <ul>

    </ul>
    <div class="series-list">
      <?php foreach ($series as $serie) : ?>
        <ul>
          <li> <a href="serie.php?id=<?php echo $serie['id_titulo'] ?>"> <?= $serie['titulo']  ?> </a>  </li>
        </ul>
      <?php endforeach; ?>
    </div>
  </body>
</html>
