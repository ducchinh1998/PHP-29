<?php
			if (isset($_POST['submit'])) {
				$diemtb = ((float)$_POST['diemhk1'] + (float)$_POST['diemhk2'] * 2)/3;
				
				if ($_POST['diemtb'] >= 5) {
					$ketqua = "Được lên lớp";			
				}
				else
				{
					$ketqua = "Ở lại lớp";
				}

				if ($diemtb>=8) {
					$hocluc = "Giỏi";
				}
				elseif ($diemtb>6.5) {
					$hocluc = "Khá";
				}
				elseif ($diemtb>=5) {
					$hocluc = "Trung bình";
				}
				else
				{
					$hocluc = "Yếu";
				}
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
	<form method="post" action="Bai1.php">
		<table style="background-color: #db95b9; margin-left: auto; margin-right: auto;">
			<tr>
				<th colspan="2" style="color: white; background-color: #cc3467;">Kết quả học tập</th>
			</tr>
			<tr>
				<td>
					Điểm HK1: 
				</td>
				<td>
					<input type="text" name="diemhk1">
				</td>
			</tr>
			<tr>
				<td>
					Điểm HK2: 
				</td>
				<td>
					<input type="text" name="diemhk2" >
				</td>
			</tr>
			<tr>
				<td>
					Điểm trung bình: 
				</td>
				<td>
					<input type="text" name="diemtb" value="<?php if (isset($diemtb)) 
					{
						echo $diemtb;
					}
					else echo '';  ?>" readonly style="background-color: #fafdd1;">
				</td>					
			</tr>
			<tr>
				<td>
					Kết quả: 
				</td>
				<td>
					<input type="text" name="ketqua" value="<?php
					if (isset($hocluc)) 
					{
						echo $hocluc;
					}
					else echo ''; ?>"  readonly style="background-color: #fafdd1;">
				</td> 
			</tr>
			<tr>
				<td>
					Xếp loại học lực: 
				</td>
				<td>
					<input type="text" name="hocluc" value="<?php 	
					if (isset($hocluc)) 
					{
						echo $hocluc;
					}
					else echo ''; ?>" readonly style="background-color: #fafdd1;">
				</td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;">
					<input type="submit" name="submit" value="Xem kết quả">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>