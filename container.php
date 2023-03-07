
 <?php
 include('../b1809516/admin/connect.php');
  $sql_danhmuc = "SELECT * FROM db_danhmuc ORDER BY id_dmuc ASC ";
  $query_danhmuc =mysqli_query($mysqli,$sql_danhmuc);
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="/b1809516/assets/fonts/fontawesome-free-6.2.0-web/css/all.min.css">
<body>

</body>
</html>
<div class="main_app">
    <div class="app_container">
            <div class="grid"> 
                <div class="grid__row" style="display: flex;">
                <div class="grid__column-2">
                    <nav class="category">
                        <h3 class="category_heading">
                            <i class="category_heading-icon fa-solid fa-list">
            
                            </i>Danh mục</h3> 
                        <ul class="category-list">
                           <li class="category-item category-item_active">
                            <?php
                            
                            while( $row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                            ?>
                               <a href="index.php?quanli=danhmuc&id= <?php  echo $row_danhmuc['id_dmuc']?>" class="category-item_link"><?php echo $row_danhmuc['tendanhmuc']?></a>
                           </li>
                           <?php
                            }
                           ?>
                       </ul>
                   </nav>
                </div>
                <?php
      
                $sql_pro = "SELECT * FROM db_sanpham,db_danhmuc WHERE db_sanpham.id_dmuc=db_danhmuc.id_dmuc And
                 db_sanpham.id_dmuc = '$_GET[id]' ORDER BY db_sanpham.id_sanpham ASC ";
                $query_pro =mysqli_query($mysqli,$sql_pro);
                ?>
                <div class="grid__column-10">
                    <div class="home-filler">
                  <span class="home-top">Sản phẩm</span>
                    </div>
                    <div class="home-product">
                        <div class="grid__row">
                            <ul class="grid_column-2-4">
                            <?php
                                 while( $row_pro = mysqli_fetch_array($query_pro)){
                             ?> <a href="index.php?quanli=sanpham&id=<?php  echo $row_pro['id_sanpham']?>">
                                   <li class="home-product-item">
                                        <a href="index.php?quanli=sanpham&id=<?php  echo $row_pro['id_sanpham']?>">
                                            <img src="/admin/quanlysanpham/upload/<?php echo $row_pro['hinh']?>" alt="" class="home-product-item_img">
                                    
                                    <h4 class="home-product-item_name"><?php echo $row_pro['tensanpham']?></h4>
                                    <span class="home-product-item_price"><?php echo number_format($row_pro['giasp']) ?>vnd</span>
                                        </a>  
                                     </li>
                                </a>      
                                   
                            <?php
                                }
                                ?>
                                
                            </ul>
                            
                                   
                            </div>
                        </div>

                    </div>
                </div>
               </div>
               <?php
            
               ?>
            </div>
          
        </div>