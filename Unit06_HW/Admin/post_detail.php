<?php
require_once('connection.php');

$id = (isset($_GET['id'])?$_GET['id']:0);

$sql = "SELECT * FROM posts WHERE id = ".$id; 

$category = $conn->query($sql)->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETAIL POST</title>
</head>
<body>
    <h1 style="text-align:center; color:blueviolet;">Detail Post</h1>
    <h1>Id: <?= $category['id'] ?> </h1>
    <h1>Name: <?= $category['title'] ?> </h1>
    <h1>Description: <?= $category['description']?> </h1>
    <h1>Slug: <?= $category['content'] ?> </h1>
    <h1>Slug: <?= $category['slug'] ?> </h1>
    <h1>Slug: <?= $category['view_count'] ?> </h1>
    <h1>Created_at: <?= $category['created_at'] ?> </h1>
</body>
</html>