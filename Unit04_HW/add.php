<?php

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
        <form action="add_process.php" method="POST" role="form">
            <legend style="text-align: center;">THÔNG TIN SINH VIÊN</legend>
            <div class="form-group">
                <label for="">Mã sinh viên:</label>
                <input type="text" class="form-control" placeholder="Nhập mã sinh viên ....." name="msv">
            </div>
            <div class="form-group">
                <label for="">Họ tên:</label>
                <input type="text" class="form-control" placeholder="Nhập họ tên sinh viên ....." name="name">
            </div>
            <div class="form-group">
                <label for="">Giới tính:</label>
                Male<input value="Male" type="radio" name="gender">
                Female<input value="Female" type="radio" name="gender">
                Other<input value="Other" type="radio" name="gender">
            </div>
            <div class="form-group">
                <label for="">Ngày tháng năm sinh:</label>
                <input type="text" class="form-control" placeholder="Nhập ngày tháng năm sinh viên ....." name="birthday">
            </div>
            <div class="form-group">
                <label for="">Quê quán:</label>
                <input type="text" class="form-control" placeholder="Nhập quê quán sinh viên ....." name="hometown">
            </div>
            <div class="form-group form-check">
                <label for="" class="form-check-label">Ngoại ngữ:</label></br>
                <input type="checkbox" class="form-check-input" name="language" value="Tiếng Anh">Tiếng Anh</br>
                <input type="checkbox" class="form-check-input" name="language" value="Tiếng Nhật"> Tiếng Nhật</br>
               <input type="checkbox" class="form-check-input" name="language" value="Tiếng Pháp"> Tiếng Pháp
            </div>
            <div class="form-group">
                <label for="">Thông tin thêm</label>
                <textarea class="form-control" name="" id="" rows="3">
            
                </textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary"> Lưu thông tin</button>


        </form>
    </div>
    
</body>
</html>