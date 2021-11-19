<?php
$array_name = array('zent',98,'Lập trình PHP',10);

$array_info = array();
$array_info['MSV'] = 645076;
$array_info['HoTen'] = 'Nguyễn Đức Chính';

var_dump($array_name);
echo "<pre>";
print_r($array_info);
echo "</pre>";

for($i = 0; $i < count($array_name); $i++)
{
    echo "<br>".$array_name[$i];
}

// Xóa phần tử 
array_splice($array_name,3,1);
//=> Bản chất tìm sự khác nhau của mảng, giá trị truyền vào là một mảng, có thể so sánh dựa vào giá trị

//Vòng lặp foreach
foreach($array_name as $key => $value){
    echo "<br> key:".$value;
}
?>