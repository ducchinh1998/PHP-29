<?php
//Viết chương trình tính tổng các chữ số của một số nguyên n 
$sum = 0;
$n =rand(1,4);
for($i = 1; $i <= $n; $i++) {
    $sum += $i;
}
echo "Tổng =" .$sum;
?>