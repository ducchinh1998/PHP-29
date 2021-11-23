<?php
  session_start();
  $type=$_GET['type'];
  $masp=$_GET['masp'];

  if($_SESSION['cart'][$masp]['soluong']>1 && $type==0){
    $_SESSION['cart'][$masp]['soluong']--;

  }else {
    unset($_SESSION['cart'][$masp]);
  }
  header('Location:cart.php')
 ?>
