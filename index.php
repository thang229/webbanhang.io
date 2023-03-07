
<?php
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop phụ kiện</title>
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="/b1809516/assets/fonts/fontawesome-free-6.2.0-web/css/all.min.css">
</head>
<body>
    <div class="main_app">
       <?php
  
    //    if(!isset($_SESSION['isLogin'])) {
    //        header('location:login.php');
    //    }

       include('../b1809516/admin/connect.php');
       session_start();
       include("header.php");
       if(isset($_GET['quanli'])){
           $tam = $_GET['quanli'];
       }
       else{
           $tam ='';
       }
       if($tam == 'danhmuc'){
           include('container.php');

       }elseif($tam =='sanpham' ){
           include('../b1809516/sanpham.php');
       }
       elseif($tam == 'dangky'){
           include('signup.php');
        }elseif($tam == 'dangnhap'){
            include('login.php');
        }
           elseif($tam == 'giohang'){
           include('giohang.php');
       }elseif($tam == 'thanhtoan'){
        include('Thanhtoan.php');
        }elseif($tam == 'timkiem'){
            include('timkiem.php');
            }elseif($tam == 'camon'){
                include('camon.php');
                }else{ 
        include('main.php');
       }
      
       include("footer.php");
      
       ?>
    

        

       
    </div>

 
</body>
</html>