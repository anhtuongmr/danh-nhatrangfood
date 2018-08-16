<h1>Danh sách quán ăn</h1>
<div class="container">    
    <div class="row">
<div class="col-sm-12">
    

       
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên quán ăn</th>
        <th>Địa chỉ</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Facebook</th>
        <th>Website</th>
        <th>Giờ hoạt động</th>
        <th>Giới thiệu chung</th>
        <th>View</th>
        <th>Phường xã</th>
        <th>Bản đồ</th>
        <th>Sửa</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($dsqa as $row) { ?>
      <tr>
        <td><?php echo $row['ID'] ?></td>
        <td><?php echo $row['TenQuanAn'] ?></td>
        <td><?php echo $row['DiaChi'] ?></td>
        <td><?php echo $row['SoDienThoai'] ?></td>
        <td><?php echo $row['Email'] ?></td>
        <td><?php echo $row['Facebook'] ?></td>
        <td><?php echo $row['Website'] ?></td>
        <td><?php echo $row['GioHoatDong'] ?></td>
        <td><?php echo $row['GioiThieuChung'] ?></td>
        <td><?php echo $row['View'] ?></td>
        <td><?php echo $row['ID_PhuongXa'] ?></td>
        <td><?php echo $row['BanDo'] ?></td>
        <td><a href="?controller=quanan&action=update&id=<?php echo $row['ID']; ?>">Sửa</a></td>
        <td><a href="?controller=quanan&action=delete&id=<?php echo $row['ID']; ?>">Xóa</a></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
  </div>
   </div> 
</div>
<?php 
	echo $_SERVER['SCRIPT_FILENAME'];
 ?>