<?php 
require_once('connection.php');

$data = $_POST;
//upload ảnh
$pname = $_FILES['thumbnail']['name'];
    $tname = $_FILES["thumbnail"]["tmp_name"];
   
    
    $uploads_dir = 'uploads/';
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);

$sql = "INSERT INTO categories (name,parent_id,thumbnail,description,slug) 
VALUES ('".$data['name']."','".$data['parent_id']."', '".$pname."','".$data['description']."','".$data['slug']."')";

$status =$conn->query($sql);
    header("Location: categories.php");



?>