<?php
	if (isset($_POST['soA']) && isset($_POST['soB'])) {
	  	if ($_POST['soA'] > $_POST['soB']) {
	  		$solon = $_POST['soA'];
	  	}
	  	elseif ($_POST['soA'] < $_POST['soB']) {
	  		$solon = $_POST['soB'];
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
	<form method="post">
		<table style="background-color: #feebca; margin-left: auto; margin-right: auto;">
			<tr>
				<th colspan="2" style="color:#a65216; background-color:#fecb67;">
					Tìm số lớn hơn
				</th>
			</tr>
			<tr>
				<td>
					Số A: 
				</td>
				<td>
					<input type="text" name="soA">
				</td>
			</tr>
			<tr>
				<td>
					Số B: 
				</td>
				<td>
					<input type="text" name="soB">
				</td>
			</tr>
			<tr>
				<td>
					Số lớn hơn: 
				</td>
				<td>
					<input type="text" name="" value="<?php
					if (isset($solon)) 
					{
						echo $solon;
					}
					else echo ''; ?>" readonly style="background-color: #fdcbd0;">
				</td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;">
					<input type="submit" name="" value="Tìm"> 
				</td>
			</tr>
		</table>
	</form>

</body>
</html>
