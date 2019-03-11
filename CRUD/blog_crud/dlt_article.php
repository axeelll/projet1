<?php

$id = $_POST['id'];

$connec = new PDO("mysql:dbname=ViewP", 'root', '0000');
$connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$request = $connec->prepare("DELETE FROM Lieux WHERE  id='$id' ");
$request->execute();

Header('Location: /');

?>