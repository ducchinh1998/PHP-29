<?php 
require_once('connection.php');

$data = $_POST;

//upload ảnh
$pname = $_FILES['thumbnail']['name'];
$tname = $_FILES["thumbnail"]["tmp_name"];
   
    
    $uploads_dir = 'uploads/';
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);

$sql = "INSERT INTO posts (title,description,thumbnail,content,slug,view_count,user_id,category_id) 
VALUES ('".$data['title']."','".$data['description']."', '".$pname."','".$data['content']."','".$data['slug']."','".$data['view_count']."','".$data['user_id']."','".$data['category_id']."')";

$status =$conn->query($sql);
header("Location: post.php");


?>