<?php
include('../admin/connect.php');
$code =$_GET['code'];
$sql_lietke_dh = "SELECT * FROM db_cart_list ,db_sanpham WHERE db_cart_list.id_sanpham= db_sanpham.id_sanpham 
AND db_cart_list.code_cart = '$code'  ORDER BY db_cart_list.id_cart_details ASC ";
$result = mysqli_query($mysqli,$sql_lietke_dh);
?>
<p style="font-size: 30px;margin: 0 20px">Liệt kê đơn hàng</p>
<table border="1" style="width:600px;margin: 10px 20px;" >
   
   <tr>
    <td style="width:30px">ID</td>
    
      <td class="product-name" style="width:450px;">Mã đơn hàng</td>
      <td class="product-name" style="width:450px;">Tên sản phẩm</td>
      <td class="product-name" style="width:450px;">số lượng</td>
      <td class="product-name" style="width:450px;">Đơn giá</td>
     <td class="product-name">Thành tiền</td>
    </tr>
    <?php
    $i =1;
    $tongtien=0;
    while($row = mysqli_fetch_array($result)){
        $i = $i+1;
        $thanhtien = $row['giasp']* $row['soluongmua']  ;
        $tongtien += $thanhtien;
    ?>
    <tr style="width:100%">
    <th><?php
      echo $i;
    ?>
    </th>
    <td> <?php echo $row["code_cart"]    ?></td>
    <td> <?php echo $row["tensanpham"]  ?></td>
    <td> <?php echo $row["soluongmua"]    ?></td>
    <td> <?php echo $row["giasp"]  ?></td>
    <td> <?php echo number_format($thanhtien,0,',','.') ?></td>
    
    <?php
   }
   ?>
   <tr>
   <p style="color: red; font-size: 20px;">Tổng tiền:  <?php echo number_format($tongtien,0,',','.')  ?>vnd</p>
   </tr>
    </table>
</div>
</form>