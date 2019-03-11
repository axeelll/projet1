<?php


include_once('/connec.php');

$dbh = getDBH(DSN, USER, PASSWORD);
$statement = $dbh->prepare("SELECT * FROM article ORDER BY id");
$statement = $connect->prepare($query);
$statement->fetchMode(POO::FETCH_CLASS, 'Article');
$statement->execute();

$articles = $req->fetchAll();

foreach($articles as $article)
{
    $articles = $article->getString();
}

require_once('views/layout.php');
 

?> 