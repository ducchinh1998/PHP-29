<?php
  require('data.php');
  session_start();
  $masp=$_GET['masp'];

  if(isset($_SESSION['cart'][$masp])){
    $_SESSION['cart'][$masp]['soluong']++;
  }else {
    $product=$products[$masp];
    $product['soluong']=1;

    $_SESSION['cart'][$masp]=$product;
  }
  header('Location:cart.php')
 ?>
