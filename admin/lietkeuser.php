<?php
include('../admin/connect.php');
$sql_lietke_user = "SELECT * FROM db_dangki ORDER BY id_user ASC ";
$result = mysqli_query($mysqli,$sql_lietke_user);
?>
<div class="box_2">
<p style="font-size: 30px;margin: 0 20px">Liệt kê user</p>
<table border="1" style="width:1300px;margin: 10px 20px;" >
   
   <tr><td style="width:25px">ID</td>
    
      <td class="product-name" style="width:250px;">Email</td>
      <td class="product-name" style="width:350px;">Họ tên</td>
      <td class="product-name" style="width:150px;">Password</td>
      <td class="product-name" style="width:150px;">Địa chỉ</td>
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
     <td> <?php echo $row['email']    ?></td>
     <td> <?php echo $row['hoten']    ?></td>
     <td> <?php echo $row['password']    ?></td>
     <td> <?php echo $row['diachi']    ?></td>
     
    <?php
   }
   ?>
    </table>
</div>