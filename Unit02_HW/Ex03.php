<?php
//In ra màn hình các số nguyên tố nhỏ hơn 100
    function check_so_nguyen_to($n) {
        // n < 2 không phải là số nguyên tố
        if($n < 2) {
            return false;
        }
        // n >= 2 
        for($i = 2; $i < $n; $i++)
        {
            if($n % $i == 0) {
            return false;
        }
    }
    return true;
}
echo "Các số nguyên tố nhỏ hơn 100 là : <br>" ;
for($i = 0; $i < 100; $i++ ) {
    if(check_so_nguyen_to ($i)) {
        echo($i . "");
    }
}
?>