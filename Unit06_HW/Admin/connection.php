<?php 
// Thong so ket noi CSDL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_blogs";


// Tạo kết nối đến CSDL
$conn = new mysqli($servername, $username, $password , $dbname);
if($conn -> connect_error) {
    echo "Fail to connect to MySQL: ".$conn ->connect_error;
    exit();
}

?>