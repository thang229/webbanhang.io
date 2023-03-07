
<?php
include('../../b1809516/admin/connect.php');
 session_start();
 if( !isset($_SESSION['login'])){
    header("Location:/admin/login.php");
 }


?>
<div class="wrapper">

<div class="main">
            <div class="menu">

            <ul class="menu_list">
                <li ><a href="index_ad.php?action=quanlydanhmuc&query=them" class="menu_list-link">Quản lý danh mục</a></li>
                <li ><a href="index_ad.php?action=quanlysanpham&query=them" class="menu_list-link">Quản lý sản phẩm</a></li>
                <li ><a href="index_ad.php?action=quanlyuser&query=lietke" class="menu_list-link">Quản lý user</a></li>
                <li ><a href="index_ad.php?action=quanlydonhang&query=lietke" class="menu_list-link">Quản lý đơn hàng</a></li>
                <p ><a href="index_ad.php?dangxuat=1" class="menu_list-link">Đăng xuất <?php if(isset($_SESSION['login'])){ 
                    echo $_SESSION['login'];
                    } ?></a></p>
            </ul>
            </div>
            <?php
             if(isset($_GET['dangxuat'])&& $_GET['dangxuat']==1){
               unset($_SESSION['login']);
               header("Location:/admin/login.php");
             }
            ?>
                <div class="menu_contain">
             
            <?php
                include('connect.php');
                if(isset($_GET['action']) &&  $_GET['query']){
                    $tam = $_GET['action'];
                    $query = $_GET['query'];
                }
                else{
                    $tam ='';
                }
                if($tam == 'quanlydanhmuc' && $query=='them'){
                    include('quanlydanhmuc/them.php');
                    include('quanlydanhmuc/lietke_dm.php');

                }elseif($tam =='quanlydanhmuc' && $query=='sua'){
                    include('quanlydanhmuc/sua.php');
                }elseif($tam == 'quanlysanpham' && $query=='them'){
                    include('quanlysanpham/them.php');
                    include('quanlysanpham/lietke.php');
                }elseif($tam =='quanlysanpham' && $query=='sua'){
                    include('quanlysanpham/sua.php');
                }elseif($tam == 'quanlyuser'&& $query=='lietke'){

                    include('../admin/lietkeuser.php');
                }elseif($tam == 'quanlydonhang'&& $query=='lietke'){

                    include('../admin/quanlydonhang.php');
                }elseif($tam =='donhang'&& $query=='xemdonhang'){

                    include('../admin/xemdonhang.php');
                }
            ?>
</div>
           
            </div>
