<?php 
session_start();
include('./admin/connect.php');
if(isset($_POST['dangky'])){
    $email= $_POST['email'];
    $password = md5($_POST['password']); 
    $hoten = $_POST['hoten'];
    $diachi = $_POST['diachi'];
    $phone = $_POST['phone'];
    $sql_dangky = mysqli_query($mysqli,"INSERT INTO db_dangki(email,password,hoten,diachi,sodienthoai)
     VALUE('$email','$password','$hoten','$diachi','$phone')");

    if($sql_dangky){
        $_SESSION['dangky'] = $hoten;
        $_SESSION['id_khachhang']= mysqli_insert_id($mysqli);
        header("Location: index.php?quanli=giohang");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="/b1809516/assets/fonts/fontawesome-free-6.2.0-web/css/all.min.css">
</head>
<body>
    <div class="modal-signup">
        <div class="modal__overlay">
        </div>
        
         <div class="modal__body-signup">
            
                <!-- form đăng ký  -->
                  <div class="auth-form">
                        <div class="auth-form__header">
                            <h3 class="auth-form-heading">Đăng ký</h3>
                            <a href="/index.php?quanli=dangnhap" class="auth-form__switch-btn" >Đăng Nhập</a>
    
                        </div>
    
                    <form method="POST" action="">
                        <div class="auth-form_form">
                                 <div class="auth-form__group">
                                <input type="text" class="auth-form__input" placeholder="Nhập Email" name="email">
                                </div>
                                 <div class="auth-form__group">
                                    <input type="password" class="auth-form__input" placeholder="Nhập mật khẩu" name="password">
                                </div>
                                
                                <div class="auth-form__group">
                                    <input type="text" class="auth-form__input" placeholder="Họ Tên" name="hoten">
                                </div>
                                <div class="auth-form__group">
                                    <input type="text" class="auth-form__input" placeholder="Địa chỉ" name="diachi">

                                </div>
                                <div class="auth-form__group">
                                    <input type="text" class="auth-form__input" placeholder="Số điện thoại" name="phone">
                                </div>
                        </div>
                        <div class="auth-form__controls">
                            <button class="btn auth-form__controls-back" ><a class="btn auth-form__controls-back" href="index.php">TRỞ LẠI</a></button>
                            <button class="btn btn--primary" ><input type="submit" value=" ĐĂNG KÝ" name="dangky" class="btn btn--primary"></button>
                        </div>
                    </form>
                </div>
         </div>  
    </div> 
    <script src="./main.js"></script>          
</body>
</html>