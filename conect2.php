<?php

$dsn='mysql:host=localhost;dbname=movies;port=3306';
// ('mysql:dbname=testdb;host=127.0.0.1','root','');
$opt=[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

$db=new PDO($dsn, 'root', '', $opt);

var_dump($db);

?>
