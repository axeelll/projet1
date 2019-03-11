
<?php
function getAllComment(){

$connect = new PDO("mysql:dbname=commentaires", 'root', '0000');

$query = "SELECT * FROM commentaires ORDER BY date";

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
 </head>
 <body>
  <br />
  <div border="2px solid black" height="50px">
  <h2 align="center"><a href="#">BLOG</a></h2>
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
     <div id="display_article">
    </div>



  <div class="container">
    <div class="form-group">
     <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Nom" />
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Commentaire" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" onclick="send_coment()"/>
    </div>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment">
    <?php 
    foreach($result as $key => $axel){
     ?> <div border="2px"><p> <?php echo $axel['date']."<br>".$axel['content']; ?></p></div>
     <button id= "like" type="button" value="Like" onclick="like()"></button><a id="clicks">0</a></p><button id="Dislike" type="button" value="Dislike"></button> <?php
    }
    ?>
    
   </div>
  </div>
 </body>
</html>

<script>
function send_article(){
   
   var req = new XMLHttpRequest();

   req.onreadystatechange = function() {
       
   };

   req.open('POST','add_article.php');

   var data = new FormData();
   data.append('article',document.getElementById('article_content').value);
   req.send(data);

   
   var get = document.getElementById("article_content").value;   
   var create = document.createElement("div");
   create.innerHTML = get ;

   var parent = document.getElementById("display_article");
   parent.appendChild(create);
 }


 </script>


<script>










  function send_coment(){
   
    var req = new XMLHttpRequest();

    req.onreadystatechange = function() {
        
    };

    req.open('POST','add_comment.php');

    var data = new FormData();
    data.append('comment',document.getElementById('comment_content').value);
    req.send(data);

    
    var get = document.getElementById("comment_content").value;   
    var create = document.createElement("div");
    create.innerHTML = get ;

    var parent = document.getElementById("display_comment");
    parent.appendChild(create);
  }

    

  var clicks = 0;
  function like() {
  clicks += 1;
  document.getElementById("clicks").innerHTML = clicks;
  };



    // var com = document.getElementById("comment_content").value;
    // element.innerHtml = "com";
    // 1. creer un noeud de type div
    // 2. lui affecter la valeur qui est dans le champ comment_content
    // 3. recuerer le parent
    //4. lier l'enfaut au parent

  


</script>


