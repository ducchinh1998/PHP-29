<?php
//Khởi tạo 1 mảng sau đó in mảng theo thứ tự ngược lại.
$number = array(1,2,3,4,5);
$reversed = array_reverse($number);
// $preserved = array_reverse($number, true);

echo "<pre>";
    print_r($number);
echo"</pre>";

echo "<pre>";
    print_r($reversed);
echo"</pre>";

// echo "<pre>";
//     print_r($preserved);
// echo"</pre>";


?>