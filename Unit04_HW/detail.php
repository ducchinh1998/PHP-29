<?php 
    session_start();
   if(isset($_GET['msv'])) {
       $msv = $_GET['msv'];
   }if (isset($_SESSION['student'])) {
       $data_arr = $_SESSION['student'][$msv];
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form role="form">
            <legend style="text-align: center;">Thông tin sinh viên</legend>
            <ul>
                <li>Họ tên:
                    <?php
                    echo $data_arr['name']; 
                    ?> 
                </li>
                <li>Giới tính:
                    <?php
                    echo $data_arr['gt']; 
                    ?> 
                </li>
                <li>Ngày tháng năm sinh:
                    <?php
                    echo $data_arr['birth']; 
                    ?> 
                </li>
                <li>Quê quán:
                    <?php
                    echo $data_arr['city']; 
                    ?> 
                </li>
                <li>Ngoại ngữ:
                    <?php
                    echo $data_arr['lgg']; 
                    ?> 
                </li>
            </ul>
        </form>
    </div>
    
</body>
</html>