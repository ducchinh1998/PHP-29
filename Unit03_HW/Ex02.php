<?php
$array_info = array();

$array_info[0][0] = 10;
$array_info[0][1] = 98;
$array_info[0][2] = 'zent';

$array_info[1][0] = 20;
$array_info[1][1] = 2001;
$array_info[1][2] = 'PHP';

$array_sub = array('PHP Basic','PHP Advance');
$array_info[2][2]= $array_sub;


echo "<pre>";
print_r($array_info);
echo "</pre>";

echo "<br>".$array_info[2][2][0];

?>