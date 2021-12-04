<?php 
require_once('connection.php');

$id = (isset($_GET['id'])?$_GET['id']:0);

$sql = "SELECT * FROM posts WHERE id = ".$id;

$post = $conn->query($sql)->fetch_assoc();

$category = $conn->query($sql)->fetch_assoc();

$sql = "SELECT * FROM categories";

$result = $conn->query($sql);

// Tạo 1 mảng để chứa dữ liệu
$categories = array();

while($row = $result->fetch_assoc()) { 
    $categories[] = $row;
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Update Post</h3>
    <hr>
        <form action="post_edit_process.php?id= <?= $post['id']?>" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title" value="<?= $post['title'] ?>">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" value="<?= $post['description'] ?>">
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail" value="<?= $post['thumbnail'] ?>">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <input type="text" class="form-control" id="" placeholder="" name="content" value="<?= $post['content'] ?>">
            </div>
            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" id="" placeholder="" name="slug" value="<?= $post['slug'] ?>">
            </div>
            <div class="form-group">
                <label for="">User_id</label>
                <input type="text" class="form-control" id="" placeholder="" name="user_id" value="<?= $post['user_id'] ?>">
            </div>
            <div class="form-group">
                <label for="">Category_id</label>
                <select  class="form-control" name="category_id">
                  
                  <?php foreach ($categories as $key => $value) {

                   ?>
                   <option value="<?= $value['id'] ?>"><?= $value['name']  ?></option>
                 <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>