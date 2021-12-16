<?php 
require_once('Controller/CategoryController.php');
require_once('Controller/PostController.php');

// index.php?mod=category&act=index;

$mod = "home";
$act = "index";
if(isset($_GET['mod'])){
    $mod = $_GET['mod'];
}
if(isset($_GET['act'])){
    $act = $_GET['act'];
}


$mod = $_GET['mod'];
$act = $_GET['act'];

$class_name = ucfirst($mod)."Controller";
$path = __DIR__ ."/Controller/".$class_name .".php";
if(!file_exists($path)){
    //Dieu kien khong co file
    echo "File $path không tồn tại ";
    exit();
}
require_once($path);


// echo $mod;

//$contronller_obj = new CategoryController();
//$contronller_obj->index();

// $contronller_obj = new PostController();
// $contronller_obj->index();
$contronller_obj = new $class_name();

$contronller_obj->$act();
//echo "Mod=$mod & act=$act";
?>