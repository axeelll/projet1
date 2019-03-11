<?php


$connect = new PDO("mysql:dbname=commentaires", 'root', '0000');

$query = "SELECT * FROM commentaires ORDER BY date";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

 

?> 