<?php

// use PDO;

$connection = new PDO("pgsql:host=localhost;port=5432;dbname=TesteCarro", "postgres", "123");

// $stmt = $connection->query("SELECT * FROM usuario;");
// // $stmt->execute();
// $user = $stmt->fetch();

// // echo $codigos['id'] ?? 'default value';;

// var_dump($stmt, $connection, $user);


/* Execute a prepared statement by passing an array of values */
$sth = $connection->query('SELECT * FROM usuario ');
// $sth->execute();
$red = $sth->fetchAll();

var_dump($sth, $red);