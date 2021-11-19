<?php 
//viết chương trình kiểm tra chuỗi đó có phải là chuỗi Palindrome không 

// Sử dụng strrev()
function Palindrome($string) {
    if(strrev($string) == $string) {
        return true;
    }else {
        return false;
    }
}
$s = "PHP";
echo "Chuỗi truyền vào là : ".$s."<br></br>";
if(Palindrome($s)) {
    echo "Chuỗi nhập vào là : 'Palindrome'";
}else{
    echo "Chuỗi nhập vào không phải là : 'Palindrome'";
}

?>