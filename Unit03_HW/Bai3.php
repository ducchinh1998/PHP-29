<?php
$name = "    nguyen dUc CHINH    ";
//Hàm strtolower chuyển đổi các kí tự thành in thường
$name = strtolower($name);
$name = trim(preg_replace('/\s+/', ' ', $name));

echo "Ten truoc khi chuan hoa: <br>$name<br>";
$change="";

    //Chuyển chữ cái đầu tiên thành in hoa	
    $change = ucwords($name);
    $change = $change.".";
echo "<br>Ten sau khi chuan hoa: <br>$change";
?>
