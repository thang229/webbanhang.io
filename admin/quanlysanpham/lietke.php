<?php
$sql_lietke_sanpham = "SELECT * FROM db_sanpham, db_danhmuc WHERE db_sanpham.id_dmuc = db_danhmuc.id_dmuc ORDER BY id_sanpham ASC ";
$result = mysqli_query($mysqli,$sql_lietke_sanpham);
?>
<div class="box_2">
<p style="font-size: 30px;margin: 0 20px">Liệt kê sản phẩm</p>
<table border="1" style="width:1400px;margin: 10px 20px;" >
   
   <tr><td style="width:25px">ID</td>
    
      <td class="product-name" style="width:450px;">Tên sản phẩm</td>
      <td class="product-name" style="width:450px;">Hình ảnh</td>
      <td class="product-name" style="width:450px;">Số lượng</td>
      <td class="product-name" style="width:450px;">Giá</td>
      <td class="product-name" style="width:450px;">Danh mục</td>
      <td class="product-name" style="width:450px;">Mô tả</td>
     <td class="product-name">Quản lý</td>
    </tr>
    <?php
    $i =0;
    while($row = mysqli_fetch_array($result)){
      $i = $i+1;
    ?>
    <tr style="width:100%">
    <th><?php
       
      echo $i;
      
     
    ?>
    </th>
     <td> <?php echo $row['tensanpham']    ?></td>
     <td><img width="150px" src="/admin/quanlysanpham/upload/<?php echo $row['hinh']?>"></td>
     <td> <?php echo $row['soluong']    ?></td>
     <td> <?php echo $row['giasp']    ?></td>
     <td> <?php echo $row['tendanhmuc']    ?></td>
     <td> <?php echo $row['mota']    ?></td>
     <td>
     <button><a  class="btn control-btn" href="/admin/quanlysanpham/xoa.php?id=<?php echo $row['id_sanpham']?>">Xóa</a></button>
    <button><a  class="btn control-btn" href="/admin/quanlysanpham/sua.php?&id=<?php echo $row['id_sanpham']?>">Sửa</a></button>
     </td>
    <?php
   }
   ?>
    </table>
</div>