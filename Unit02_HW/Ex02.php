<?php
 echo"GIẢI PHƯƠNG TRÌNH BẬC HAI <br>";
 $a = "";
 $b = "";
 $c = "";

 function giaiPTB2($a,$b,$c){
     // Kiểm tra ptbac2
     if ($a == 0 ) {
         echo "A phải khác 0. Nhập lại!";
     }
     else{
        //In phương trình ra màn hình
        echo "Phương trình : " .$a ."x2 +" .$b .".x +" .$c . " = 0" ; 
        echo "<br>";
        // tính delta
        $delta = $b * $b - 4 * $a * $c;
        $x1 = "";
        $x2 = "";
    
    // tính nghiệm
    if ($delta > 0) {
        $x1 = (- $b + sqrt ( $delta )) / (2 * $a);
        $x2 = (- $b - sqrt ( $delta )) / (2 * $a);
        echo ("Phương trình có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2);
    } else if ($delta == 0) {
        $x1 = (- $b / (2 * $a));
        echo ("Phương trình có nghiệm kép: x1 = x2 = " . $x1);
    } else {
        echo ("Phương trình vô nghiệm!");
    }}
 }
 giaiPTB2(1,-3,2);
?>