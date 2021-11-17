<?php
$bien_toan_cuc = "Luật biển- Biển toàn cục";

function Luat_VN(){
echo"Luật đường bộ Việt Nam";
$bien_cuc_bo ="Đi bên phải đường - Cục bộ";
echo"<br> Luật trong nước (cục bộ):". $bien_cuc_bo;
echo"<br> Luật quốc tế (toàn cục):". $GLOBALS['$bien_toan_cuc'];

}
Luat_VN();
?>