<?php
		$host = "localhost";
		$user = "root";
		$pass = "";
		$data = "qlkh";

		$con = mysqli_connect($host, $user, $pass, $data);
		$con = mysqli_connect($host, $user, $pass, $data) or die("Ket noi khong thanh cong");  
		
		$makh = $_GET['makh'];
		$sql = "SELECT * FROM tbl_khachhang WHERE makh = '$makh'";
		$result = mysqli_query($con,$sql);
		while($row =mysqli_fetch_assoc($result))
		{
			$makh = $row['makh'];
			$tenkh = $row['tenkh'];
			$gioitinh = $row['gioitinh'];
			$diachi = $row['diachi'];
			$dienthoai = $row['dienthoai'];
			$email = $row['email'];
		}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		table, td {
			border: 0.5px solid black;
			border-collapse: collapse;
			padding: 5px;
			width: 500px;
			margin: auto;
		}
	</style>
</head>
<body>
	<form method="post">
		<h2>Sửa thông tin khách hàng</h2>
		<div style="text-align:center;"><a href="Bai1.php">Trở về</a></div>
		<table>
			<tr>
				<td>Mã khách hàng</td>
				<td><input type="text" name="makh" value="<?php echo $makh; ?>" readonly></td>
			</tr>
			<tr>
				<td>Tên khách hàng</td>
				<td><input type="text" name="tenkh" value="<?php echo $tenkh; ?>"></td>
			</tr>
			<tr>
				<td>Giới tính</td>
				<td><input type="text" name="gioitinh" value=" <?php echo $gioitinh; ?>"></td>
			</tr>
			<tr>
				<td>Địa chỉ</td>
				<td><input type="text" name="diachi" value="<?php echo $diachi; ?>"></td>
			</tr>
			<tr>
				<td>Số điện thoại</td>
				<td><input type="text" name="dienthoai" value="<?php echo $dienthoai; ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;  ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btnLuu" value="Lưu"></td>
			</tr>
		</table>	
	</form>
	<?php
		if (isset($_POST['btnLuu'])) {
			$makh = $_POST['makh'];
			$tenkh = $_POST['tenkh'];
			$gioitinh = $_POST['gioitinh'];
			$diachi = $_POST['diachi'];
			$dienthoai = $_POST['dienthoai'];
			$email = $_POST['email'];
			$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
			if (!preg_match ($pattern, $email) ){  
    			echo "Email không hợp lệ.";
			}

			$sql = "UPDATE tbl_khachhang SET tenkh = '$tenkh', gioitinh ='$gioitinh', diachi = '$diachi', dienthoai = '$dienthoai',email='$email' WHERE makh = '$makh'";
			if (mysqli_query($con,$sql)) {
			 	echo "Lưu thành công";
			 } 
			 else
			 {
			 	echo "Lưu thất bại!".mysqli_error($con);
			 }
		  }  
	?>
</body>
</html>