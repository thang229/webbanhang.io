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
              
                ?>
                <div class="grid__column-10">
                    <div class="home-filler">
                  <span class="home-top">Lời cảm ơn</span>
                    </div>
                    <div class="home-product">
                        <div class="grid__row">
                            <ul class="grid_column-2-4">
                            
                              <P style="font-size: 30px;color: red;">Xin cảm ơn đã ghé qua và hẹn gặp lại</P> 
                                    
                        
                                   
                            
                                
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