<?php 
require_once('connection.php');

$data = $_POST;

//upload ảnh
$pname = $_FILES['thumbnail']['name'];
    $tname = $_FILES["thumbnail"]["tmp_name"];
   
    
    $uploads_dir = 'uploads/';
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
$id = (isset($_GET['id'])?$_GET['id']:0);
if ($data['parent_id']==0) {
    $sql = "UPDATE categories SET  name = '".$data['name']."', parent_id = null, thumbnail = '".$pname."', description = '".$data['description']."', slug = '".$data['slug']."' 
WHERE id = ".$id;
} else {
    $sql = "UPDATE categories SET  name = '".$data['name']."', parent_id = ".$data['parent_id'].", thumbnail = '".$pname."', description = '".$data['description']."', slug = '".$data['slug']."' 
WHERE id = ".$id;
}

// echo $sql;
// die();
$status =$conn->query($sql);
    header("Location: categories.php");


?>