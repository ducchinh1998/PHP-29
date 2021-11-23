<?php
  session_start();
  if(isset($_SESSION['cart'])){
    $products=$_SESSION['cart'];
  }
  // session_destroy();
   // echo '<pre>';
   //      print_r($products);
   //  echo '</pre>';
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

   </head>
   <body>
     <div class="container">
       <h2 align="center">Danh sách sản phẩm</h2>
       <a href="index.php" class="btn btn-primary">Quay lại</a>
       <table class="table">
         <thead>
           <tr>
             <th>Mã SP</th>
             <th>Tên SP</th>
             <th>Giá bán</th>
             <th>Số lượng</th>
             <th>Thành tiền</th>
             <th>Ảnh</th>
           </tr>
         </thead>
         <tbody>
           <?php
              $sum=0;
              foreach ($products as $product) {
                $sum += $product['soluong'] * $product['dongia'];
            ?>
            <tr>
              <td><?= $product['id'] ?></td>
              <td> <?= $product['tensp']?></td>
              <td> <?= $product['dongia']?></td>
              <td><a style="margin-right:10px;" href="add2cart.php?masp=<?= $product['id']?>&type=0" class="btn btn-danger">+</a><?= $product['soluong'] ?><a href="remove.php?masp=<?= $product['id'] ?>" style="margin-left:10px;" class="btn btn-primary">-</a> </td>
              <td><?= number_format($product['soluong']*$product['dongia'])?></td>
              <td><img style="width:80px;height:100px;" src="<?= $product['anh'] ?>"></td>
              <td>
                  <a href="remove.php?masp=<?= $product['id'] ?>&type=1" class="btn btn-danger">Xóa sản phẩm</a>
              </td>
            </tr>
          <?php }
           ?>
         </tbody>
       </table>
     </div>
   </body>
 </html>
