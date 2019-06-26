<?php

require_once 'conect2.php';
// $dsn='mysql:host=localhost;dbname=movies;port=3306';
// $opt=[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];

$titulo=$_GET['title'];
$rating=$_GET['rating'];
$premios=$_GET['awards'];
$duracion=$_GET['lenght'];
$releaseD=$_GET['year'];


try {
  $sql="INSERT INTO pelis (titulo,rating,premios,duracion,release_date) values (?,?,?,?,?)";
  $query=$db->prepare($sql);
  // $db=new PDO($dsn,'root','',$opt);
  $query->execute([$titulo,$rating,$premios,$duracion,$releaseD]);
} catch (\Exception $e) {
  echo "Ocurrió un error";
  die();
}


// $sql="INSERT INTO pelis (titulo,rating,premios,duracion,release_date) values (?,?,?,?,?)";
// $query=$db->prepare($sql);
// $query->execute([$titulo,$rating,$premios,$duracion,$releaseD]);

$pelis=$query->fetchAll(PDO::FETCH_ASSOC);



header('Location: agregarPelicula.php');
 ?>
