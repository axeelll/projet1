<?php
function getAllComment(){

$connect = new PDO("mysql:dbname=commentaires", 'root', '0000');

$query = "SELECT * FROM article ORDER BY id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
return $result;
}
$result=getAllComment();
?>

<!DOCTYPE html>
<html>
 <head>
  <title>Comment System using PHP and Ajax</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
 </head>
 <body>
  <br />
  <div class= "button"><form method="get" action="/workspace-git/sdf/projet1/blog/art/user.php">
    <button type="submit">Add user</button>
</form>
</div>
  <div border="2px solid black" height="50px">
  <h2 align="center"><a href="#">Article</a></h2>
</div>
  <br />
  <div class="form-group">
     <input type="text" name="title_name" id="title_name" class="form-control" placeholder="Titre" />
    </div>
    <div class="form-group">
     <textarea name="article_content" id="article_content" class="form-control" placeholder="Article" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="article_id" id="article_id" value="0" />
     <input type="submit" name="add" id="add" class="" value="Ajouter" onclick="send_article()"/>
     <input type="submit" name="dlt" id="dlt" class="" value="Supprimer" onclick="dlt_article()"/>
     <div id="display_article">
     <?php 
    foreach($result as $key => $axel){
     ?> <div border="2px"><p> <?php echo $axel['title']."<br>".$axel['articles']; ?></p></div><?php
    }
    ?>
    </div>
  </div>
</body>
</html>