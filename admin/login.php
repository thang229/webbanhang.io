<?php
session_start();
include('../admin/connect.php');
if(isset($_POST['login'])){
    $email= $_POST['username'];
    $password =md5($_POST['password']) ;
    $sql ="SELECT * FROM tbl_ad WHERE username = '$email' AND password = '$password'  LIMIT 1";
    $row = mysqli_query($mysqli,$sql);
    $cont = mysqli_num_rows($row);
    if($cont > 0){
        $_SESSION['login']= $email;
        header('Location: index_ad.php');
    }else{
        echo '<script> alert("Email hay mật khẩu sai") </script>';

        header("Location: /admin/login.php");
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="/b1809516/assets/fonts/fontawesome-free-6.2.0-web/css/all.min.css">
</head>
</head>
<body>
    <div class="modal">
        <div class="modal__overlay">
        </div>
        
         <div class="modal__body" >
    <form class="auth-form" method="POST"> 
        
        <div class="auth-form__header">
            <h3 class="auth-form-heading">Đăng nhập Admin</h3>
        

        </div>

       
        <div class="auth-form_form">
                 <div class="auth-form__group">
                <input type="text" class="auth-form__input" placeholder="Nhập Email" name="username">
                </div>
                 <div class="auth-form__group">
                    <input type="password" class="auth-form__input" placeholder="Nhập mật khẩu" name="password">
                </div>
               
        </div>
        
        <div class="auth-form__controls">
            <button class="btn auth-form__controls-back"><a href="index.php" class="btn auth-form__controls-back">TRỞ LẠI</a></button>
            <button  class="btn btn--primary"><input class="btn btn--primary" type="submit" value="ĐĂNG NHẬP" name="login"> </button>
        </div>
    </form>
    </div>
    </div>
<script src="./main.js">
</script>
</body>
</html>