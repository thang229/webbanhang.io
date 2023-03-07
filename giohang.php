
<div class="">
    <P style="font-size: 20px;">Giỏ hàng</P>
    <?php
 /*  session_start(); */
  if(isset($_SESSION['dangky'])){
  echo 'Xin chao:'.$_SESSION['dangky'];
  echo $_SESSION['id_khachhang'];
 /*  if(isset($_SESSION['dangnhap'])){
    echo 'Xin chao:'.$_SESSION['dangnhap'];
  } */
}
?>
<?php  if(isset($_GET['dangxuat'])&& $_GET['dangxuat'] ==1 ){
  unset($_SESSION['dangky']);
  unset($_SESSION['dangnhap']);
}?>

  <?php  if(isset($_SESSION['cart'])){
   
  }
?>
   <table style="width:100%;height:300px; text-align:center;border-collapse:collapse; border:2px solid black ;" >
  <tr>
    <th style="width:4%; text-align:center;border-collapse:collapse; border:1px solid black;height: 20px;">ID</th>
    <th style="width:4%; text-align:center;border-collapse:collapse; border:1px solid black ;height: 20px;">Masp</th>
    <th style="width:20%; text-align:center;border-collapse:collapse; border:1px solid black ;height: 20px;">Tên SP</th>
    <th style="width:20%; text-align:center;border-collapse:collapse; border:1px solid black ;height: 20px;">Hình</th>
    <th style="width:5%; text-align:center;border-collapse:collapse; border:1px solid black ;height: 20px;">SL</th>
    <th style="width:20%; text-align:center;border-collapse:collapse; border:1px solid black ;height: 20px;">Giá</th>
    <th style="width:20%; text-align:center;border-collapse:collapse; border:1px solid black ;height: 20px;">Thành tiền</th>
    <th style="width:10%; text-align:center;border-collapse:collapse; border:1px solid black ;height: 20px;">Quản lý</th>
  </tr>
  <?php  if(isset($_SESSION['cart'])){
    $i=0;
    $tongtien =0;
     foreach($_SESSION['cart'] as $cart_item){
        $thanhtien = $cart_item['giasp'] * $cart_item['soluong'];
        $tongtien= $tongtien + $thanhtien;
        $i++;
?>
  <tr>
    <td style="width:4%; text-align:center;border-collapse:collapse; border:1px solid black;font-size:15px;"><?php echo $i;?></td>
    <td style="width:4%; text-align:center;border-collapse:collapse; border:1px solid black ;font-size:15px;"><?php echo $cart_item['masp'];?> </td>
    <td style="width:4%; text-align:center;border-collapse:collapse; border:1px solid black ;font-size:15px;"><?php echo $cart_item['tensanpham'];?> </td>
    <td style="width:4%; text-align:center;border-collapse:collapse; border:1px solid black ;">
    <img  width="100px" src="/admin/quanlysanpham/upload/<?php echo $cart_item['hinh'];?>"> </td>
    <td style="width:6%; text-align:center;border-collapse:collapse; border:1px solid black ;font-size:15px;">
          
          <a style="font-size: 20px;text-decoration: none;" href="/themgiohang.php?cong=<?php echo $cart_item['id']?>">+</a>
              <?php echo $cart_item['soluong'];?>
            <a  style="font-size: 20px;text-decoration: none;" href="/themgiohang.php?tru=<?php echo $cart_item['id']?>">-</a>
            </td>
    <td style="width:4%; text-align:center;border-collapse:collapse; border:1px solid black ;font-size:15px;"><?php echo number_format( $cart_item['giasp']) .'đ';?></td>
    <td style="width:4%; text-align:center;border-collapse:collapse; border:1px solid black ;font-size:15px;"><?php echo number_format($thanhtien).'đ' ;?>đ</td>
    <td style="width:4%; text-align:center;border-collapse:collapse; border:1px solid black ;font-size:15px;">
    <a href="/themgiohang.php?xoa=<?php echo $cart_item['id']?>">Xóa</a></td>
  </tr>
 <?php
}
?>
<tr>
    <td colspan="6" style="font-size:15px;"><p  style="float:left;" >Tổng tiền: <?php echo number_format( $tongtien).'đ';?></p>
    <button  style="float:right; font-size:20px;border-radius: 2pc;" ><a href="/themgiohang.php?xoatatca=1>" style="text-decoration: none;">Xóa tất cả</a></button><br>
    <div style="clear: both;">
    <?php
    if(isset($_SESSION['dangky'] )){
    
 ?>
 <button style="float:left; font-size:20px;border-radius: 2pc; background-color: #fe6453">
      <a href="/Thanhtoan.php"  style="text-decoration: none; color:aliceblue">Đặt hàng</a></button>
      <button style="float:right; font-size:20px;border-radius: 2pc; background-color: #659962">
      <a href="index.php?dangxuat=1"  style="text-decoration: none; color:aliceblue">Đăng xuất</a></button>
 <?php
    }elseif(isset($_SESSION['dangnhap'])){
    ?>
    <button style="float:left; font-size:20px;border-radius: 2pc; background-color: #fe6453">
      <a href="/Thanhtoan.php"  style="text-decoration: none; color:aliceblue">Đặt hàng</a></button>
      <button style="float:right; font-size:20px;border-radius: 2pc; background-color: #659962">
      <a href="index.php?dangxuat=1"  style="text-decoration: none; color:aliceblue">Đăng xuất</a></button>
 <?php
    }else{
    ?>
    <button style="float:right; font-size:20px;border-radius: 2pc; background-color: #fe6453">
      <a href="index.php?quanli=dangky"  style="text-decoration: none; color:aliceblue">Đăng ký đặt hàng</a></button>
      <?php
      }
      ?>
    </div>
    
</td>
  </tr>
<?php
 } else{
 ?>
 <tr>
    <td colspan="6" style="font-size: 25px;">Hiện tại giỏ hàng trống</td>
  </tr>
 <?php
 };
 ?>
</table>

