<?php


date_default_timezone_set('UTC');
$dayte = date("Y-m-d H:i:s"); 

$commentaire = $_POST["comment"];

echo $commentaire;

 $connect = new PDO("mysql:dbname=commentaires", 'root', '0000');
 $query = "INSERT INTO commentaires (date, content) 
 VALUES ('$dayte', '$commentaire')";

$statement = $connect->prepare($query);
$statement->execute();

// $error = '';
// $comment_name = '';
// $comment_content = '';

//     if(empty($_POST["comment_name"])){                     
//             $error .= '<p>Error</p>';
//     }
//     else{
//         $comment_name = $_POST["comment_name"];
//     }

//     if(empty($_POST["comment_content"])){  
//     $error .= '<p>error</p>';
//     }
// else
// {
//  $comment_content = $_POST["comment_content"];
// }

// if($error == '')
// {
//  $query = "INSERT INTO tbl_comment (parent_comment_id, comment, comment_sender_name) VALUES (:parent_comment_id, :comment, :comment_sender_name)";
//  $statement = $connect->prepare($query);
//  $statement->execute(
//   array(
//    ':parent_comment_id' => $_POST["comment_id"],
//    ':comment'    => $comment_content,
//    ':comment_sender_name' => $comment_name
//   )
//  );
//  $error = '<label class="text-success">Comment Added</label>';
// }

// $data = array(
//  'error'  => $error
// );

// echo json_encode($data);

?>