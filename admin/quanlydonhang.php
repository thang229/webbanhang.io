<?php
include('../admin/connect.php');
$sql_lietke_dh = "SELECT * FROM db_cart ,db_dangki WHERE db_cart.id_khachhang = db_dangki.id_user ORDER BY db_cart.id_cart ASC ";
$result = mysqli_query($mysqli,$sql_lietke_dh);
?>
<p style="font-size: 30px;margin: 0 20px">Liệt kê đơn hàng</p>
<table border="1" style="width:600px;margin: 10px 20px;" >
   
   <tr><td style="width:30px">ID</td>
    
      <td class="product-name" style="width:450px;">Mã đơn hàng</td>
      <td class="product-name" style="width:450px;">Tên khách hàng</td>
      <td class="product-name" style="width:450px;">Địa chỉ</td>
      <td class="product-name" style="width:450px;">Số điện thoại</td>
     <td class="product-name">Quản lý</td>
    </tr>
    <?php
    $i =1;
    while($row = mysqli_fetch_array($result)){
    ?>
    <tr style="width:100%">
    <th><?php
       
      echo $i;
      
      $i = $i+1;
    ?>
    </th>
    <td> <?php echo $row["code_cart"]    ?></td>
    <td> <?php echo $row["hoten"]  ?></td>
    <td> <?php echo $row["diachi"]    ?></td>
    <td> <?php echo $row["sodienthoai"]  ?></td>
    <td>
     <button><a  class="btn control-btn" href="index_ad.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart']?>">Xem đơn hàng</a></button>
   
     </td>
    <?php
   }
   ?>
    </table>
</div>
</form>