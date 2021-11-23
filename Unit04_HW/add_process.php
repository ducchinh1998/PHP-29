<?php
session_start();
if(isset($_POST['submit'])) {
    $msv = $_POST['msv'];
    $name = $_POST['name'];
    $gt = $_POST['gender'];
    $birth = $_POST['birthday'];
    $city = $_POST['hometown'];
    $lgg = $_POST['language'];
    $_SESSION['student'][$msv] = [
        'msv' => $msv,
        'name' => $name,
        'gt' => $gt,
        'birth' => $birth,
        'city' => $city,
        'lgg' => $lgg,
    ];
    echo print_r($_SESSION);
    setcookie('msg', 'Thêm sinh viên thành công',time()+6);
    header("Location: list.php");

}

?>