<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../b1809516/assets/css/base.css">
</head>
<body >
<p class="name_chitiet">Chi tiết sản phẩm</p>
   
    <div class="main_chitiet">
         
                <?php
                $sql_chitiet =" SELECT * FROM db_sanpham,db_danhmuc  WHERE db_sanpham.id_dmuc= db_danhmuc.id_dmuc  
                AND db_sanpham.id_sanpham= '$_GET[id]' LIMIT 1";
                $query_chitiet = mysqli_query($mysqli,$sql_chitiet); 
                    while($row_chitiet = mysqli_fetch_array($query_chitiet)){
                ?>
            <div class="hinhanh_sanpham">

            <img src="/admin/quanlysanpham/upload/<?php echo $row_chitiet['hinh']?>" class="img-chitiet">
            </div>
            <form action="/themgiohang.php?id= <?php echo $row_chitiet['id_sanpham']?>" method="POST">
            <div class="chitiet_sanpham">
              <p style="font-size: 30px;"><?php echo $row_chitiet['tensanpham']?></p>
              <span  style="font-size: 25px;font-weight: 500; color:red"> Giá: <?php echo number_format($row_chitiet['giasp']) ?>đ</span>
              <p class="product-item_name" style="font-size: 25px;"> Mã sản phẩm: <?php echo $row_chitiet['masp']?></p>
              <p class="product-item_name" style="font-size: 25px;"> Số lượng: <?php echo $row_chitiet['soluong']?></p>
              <p class="product-item_name" style="font-size: 25px;"> Mô tả : <?php echo $row_chitiet['mota']?></p>
              <p class="product-item_name" style="font-size: 25px;"> Tên danh mục: <?php echo $row_chitiet['tendanhmuc']?></p>
                        <input type="submit" value="Thêm giỏ hàng" style="margin:30px; border-radius:3pc;" class="btn btn--primary" name="themgiohang">
            </div>
            <?php
                }
            ?>
    </div></form>
</body> 
</html>