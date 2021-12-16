<?php
	$con = mysqli_connect("localhost","root","","qlkh") or die("Kết nối thất bại!");
	$makh = $_GET['makh'];
	$sql = "DELETE FROM tbl_khachhang WHERE makh = '$makh'";
	if (mysqli_query($con,$sql)) {
		echo "Xoá thành công!";
	}
	else
	{
		echo "Xoá thất bại!";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<a href="Bai1.php">Quay lại</a>
</body>
</html>