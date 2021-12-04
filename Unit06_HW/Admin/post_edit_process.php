<?php 
require_once('connection.php');

$data = $_POST;
//upload ảnh
$pname = $_FILES['thumbnail']['name'];
    $tname = $_FILES["thumbnail"]["tmp_name"];
   
    
    $uploads_dir = 'uploads/';
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
$id = (isset($_GET['id'])?$_GET['id']:0);
$sql = "UPDATE posts SET  title = '".$data['title']."', description = '".$data['description']."', thumbnail = '".$pname."', content = '".$data['content']."', slug = '".$data['slug']."',user_id = ".$data['user_id'].",category_id = ".$data['category_id']."
WHERE id = ".$id;

// echo $sql;
// die();
$status =$conn->query($sql);
    header("Location: post.php");

?>