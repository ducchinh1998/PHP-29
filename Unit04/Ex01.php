<?php
    $info = array(
        'ID' => '1234455',
        'NAME' => 'Nguyễn Đức Chính',
    );
    if(isset($info['ID'])) {
        echo "ID".$info['ID'];
    }else{
        echo "Không tồn tại key";

    }

    echo $info['ID'] ?? 'Không tồn tại';
?>