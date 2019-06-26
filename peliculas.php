<?php

$dsn='mysql:host=localhost;dbname=autores;port=3306';
$opt=[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];
$db=new PDO($dsn,'root','',$opt);

try {
  $base= $db->query("SELECT titulo FROM actores");
} catch (PDOException $error) {
    $message=$error->getMessage();
    $code=$error->getCode();

    echo "Ocurrio un error";
}

$actores=$base->fetchAll(PDO::FETCH_ASSOC);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <nav>
      <?php foreach ($actores as $actor): ?>
        <ul>
          <li><?php echo $actor['titulo']; echo "<hr>";?></li>
        </ul>
      <?php endforeach; ?>
    </nav>
  </body>
</html>
