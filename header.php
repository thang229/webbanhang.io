


<?php  if(isset($_GET['dangxuat'])&& $_GET['dangxuat'] ==1 ){
  unset($_SESSION['dangky']);
  unset($_SESSION['dangnhap']);
}?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/b1809516/assets/fonts/fontawesome-free-6.2.0-web/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
</body>
</html>
<header class="header">
            <div class="grid">
                    <nav class="header__navbar">
                        <ul class="header__list">
                            <li class="header__navbar-item header__navbar-item--qr">
                                Vào cửa hàng rên ứng dụng B1-Shop
                              
                            </li>
                        </ul>
                        <ul class="header__list">
                            <li class="header__navbar-item">
                                <a href="" class="header__navbar-item-link">
                                    <i class="header-navbar-icon fa-solid fa-bell"></i>
                                    Thông báo
                                </a>
                            </li>
                            <li class="header__navbar-item">
                                <a href="" class="header__navbar-item-link">
                                    <i class="header-navbar-icon fa-solid fa-circle-question"></i>Trợ giúp</a>
                            </li><?php  if(isset($_SESSION['dangky'])){

?>                              
                                <p class="header__navbar-item header__navbar-item--strong">User <?php echo $_SESSION['dangky']; ?></p>
                             <a href="index.php?dangxuat=1" class="header__navbar-item header__navbar-item--strong"> Đăng xuất</a> 
                             <?php
                             }else{ 
                                ?>
                            <a href="/index.php?quanli=dangnhap" class="header__navbar-item header__navbar-item--strong"> Đăng nhập</a> 

                            <a href="/index.php?quanli=dangky" class="header__navbar-item header__navbar-item--strong"> Đăng ký</a>
                        <?php 
                             }
                        ?>
                        </ul>
                    </nav>
                    <!-- header with seach -->
                    <div class="header-with-search">
                        <div class="header__logo">
                          <a href="index.php" class="header_logo-link">
                            <img src="./assets/img/B1-shop.png" alt="header_logo" class="header__logo-img">
                          </a>
                          
                        </div>
                        <div class="header__search" >
                        <form action="index.php?quanli=timkiem" method="POST" class="header__search">
                            <input type="text" class="header__search-input" placeholder="Tìm kiếm sản phẩm" name="tukhoa">
                            <input class="header__search-btn" type="submit" name="timkiem" value=" Tìm kiếm">
                             
                        </form>
                    </div>
                        <div class="header__cart">
                            <div class="header__cart-wrap">
                            
                                    <button class="header__cart-icon"><a class="header__cart-icon"href="index.php?quanli=giohang"> Giỏ hàng</a></button>
                                    <div class="header__cart-list header__cart-list_no-cart">
                                    <?php
                                    include('giohang.php');
                                    ?>
                                </div>


                            </div>
                        
                        </div>
                            
                    </div>
             </div>
                
            </header>