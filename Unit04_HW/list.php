<?php
    session_start();
    if(isset($_SESSION['student'])) {
        $datas = $_SESSION['student'];
     }
    // session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>Danh sách sinh viên</h2>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Họ tên</th>
      <th scope="col">Giới tính</th>
      <th scope="col" class="text-center">Hành động</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 0;
    foreach($datas as $data) {
        $i++;
    
    ?>
    <tr>
        <th>
            <?= $i+1 ?>
        </th>
      <th scope="row">
          <?=
          $data['name'];
          ?>
      </th>
      <td colspan="2">
        <?=
        $data['gt'];
         ?>
      </td>
      <td>
          <a href="detail.php?msv=<?= $data['msv'] ?>" class="btn btn-primary text-center">
        Xem chi tiết
          </a>
      </td>
    </tr>
    <?php 
    }
    ?>
    
  </tbody>
</table>


    </div>
</body>
</html>