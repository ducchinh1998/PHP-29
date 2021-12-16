<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		table, td {
			border: 0.5px solid blue;
			border-collapse:collapse ;
			width: 500px;
			margin: auto;
			padding: 5px;	
		}
		a {
			text-align: center;
		}
	</style>
</head>
<body>
	<form method="post">
		<h2 align="center">Thêm thông tin khách hàng</h2>
		<div style="text-align:center;"><a href="Bai1.php">Trở vể</a></div>
		<table>
			<tr>
				<td>Mã khách hàng</td>
				<td><input type="text" name="makh" value=""></td>
			</tr>
			<tr>
				<td>Tên khách hàng</td>
				<td><input type="text" name="tenkh"></td>
			</tr>
			<tr>
				<td>Giới tính</td>
				<td><select name="gioitinh">
					<option>Nam</option>
					<option>Nữ</option>
				</select></td>
			</tr>
			<tr>
				<td>Địa chỉ</td>
				<td><input type="text" name="diachi" ></td>
			</tr>
			<tr>
				<td>Số điện thoại</td>
				<td><input type="text" name="dienthoai"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btnThem" value="Thêm"></td>
			</tr>
		</table>
	</form>
	<?php
		$host = "localhost";
		$user = "root";
		$pass = "";
		$data = "qlkh";

		$con = mysqli_connect($host, $user, $pass, $data);
		$con = mysqli_connect($host, $user, $pass, $data) or die("Ket noi khong thanh cong");
		
		
		if (isset($_POST['btnThem'])) {
			$makh = $_POST['makh'];
			$tenkh = $_POST['tenkh'];
			$gioitinh = $_POST['gioitinh'];
			$diachi = $_POST['diachi'];
			$dienthoai = $_POST['dienthoai'];
			$email = $_POST['email'];
			
			$sql = "INSERT INTO tbl_khachhang (makh,tenkh,gioitinh,diachi,dienthoai,email) VALUES ('$makh','$tenkh','$gioitinh','$diachi','$dienthoai','$email')";
			$result = mysqli_query($con, $sql);
			if($result)
			{
				echo "Thêm thành công!";
			}
			else
			{
				echo "Thêm thất bại!";
			}
		}
 	?>
</body>
</html>