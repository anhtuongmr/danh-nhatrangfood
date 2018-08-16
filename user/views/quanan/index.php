<table border="1px" style="border-collapse: collapse">
	<tr>
		<th>ID</th>
		<th>Quán ăn</th>
		<th>Địa chỉ</th>
		<th>Số điện thoại</th>
		<th>Giờ hoạt động</th>
	</tr>
	<?php foreach ($ds as $row): ?>
	<tr>
		<td><?php echo $row['ID'] ?></td>
		<td><?php echo $row['TenQuanAn'] ?></td>
		<td><?php echo $row['DiaChi'] ?></td>
		<td><?php echo $row['SoDienThoai'] ?></td>
		<td><?php echo $row['GioHoatDong'] ?></td>
		<!-- <td><?php echo ($row['gender'] == 1) ? 'Nam' : 'Nu' ?></td> -->
		<td><a href="?controller=employee&action=delete&id=<?php echo $row['id'] ?>">Delete</a></td>
	</tr>
	<?php endforeach ?>
</table>