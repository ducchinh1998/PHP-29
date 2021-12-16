<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$data = "qlkh";

	$conn = mysqli_connect($host, $user, $pass, $data);
	if($conn){
		echo "Kết nối thành công!";
	}
	else
		echo "Kết nối thất bại!";
	// $con = mysqli_connect($host, $user, $pass, $data) or die("Ket noi khong thanh cong");

	$sql = 'SELECT * FROM tbl_khachhang';
	$result = mysqli_query($conn,$sql)

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<style type="text/css">
	table,td {
		border: 1px solid black ;
		border-collapse: collapse;
		margin: auto;
		padding: 5px;
	}
</style>
</head>
<body>
	<form>
		<h2>Danh sách công ty</h2>
		<a href="themcongty.php">Thêm công ty</a>
		<table >
			
			<tr>
				<td>Mã công ty</td>
				<td>Tên công ty</td>
				<td>Địa chỉ</td>
				<td>Điện thoại</td>
				<td>Email</td>
				<td>Năm thành lập</td>
				<td>Giám đốc</td>
				<td>Lĩnh vực</td>
			</tr>
			<?php
			if (mysqli_num_rows($result) > 0) {
			  	while ($row = mysqli_fetch_assoc($result)) {
			  		$makh = $row['macty']
			?>
			  	<tr>
			  		<td><?php echo $macty; ?></td>
			  		<td><?php echo $row['tencty']; ?></td>
			  		<td><?php echo $row['gioitinh']; ?></td>
			  		<td><?php echo $row['diachi']; ?></td>
			  		<td><?php echo $row['dienthoai']; ?></td>
			  		<td><?php echo $row['email']; ?></td>
			  		<td><a href="suathongtin.php?makh=<?php echo $makh; ?>">Sửa</a></td>
			  		<td><a href="xoathongtin.php?makh=<?php echo $makh; ?>">Xoá</a></td>
			  	</tr>	
			<?php 
				}
			}	
			?>				
		</table>
	</form>
</body>
</html>