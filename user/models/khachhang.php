<?php 
class KhachHangModel extends MasterModel{

	public static function get_all(){
		return parent::get_all_from('khachhang');
	}

	public static function get_num_rows(){
		return parent::get_num_rows_from_table('khachhang');
	}

	public static function get_id($id){
		return parent::get_all_from_where('khachhang', 'ID', $id);
	}

	public static function insert($tenkhachhang, $tendangnhap, $matkhau, $diachi, $email, $sodienthoai){
		$db = new PDO('mysql:host=localhost;dbname=q2','root','');
		$db->exec('SET NAMES utf8');

		$sql = "INSERT INTO `khachhang` (`TenKhachHang`, `TenDangNhap`, `MatKhau`, `DiaChi`, `Email`, `SoDienThoai`) VALUES ('$tenkhachhang', '$tendangnhap', '$matkhau', '$diachi', '$email', '$sodienthoai');";
		$stmt = $db->prepare($sql);
		$stmt->execute();
	}

	public static function delete_by_id($id){
		parent::delete('quanan','id',$id);
	}

	public static function check_login($username, $password){
		$db = new PDO('mysql:host=localhost;dbname=q2','root','');
		$db->exec('SET NAMES utf8');

		$sql = "SELECT COUNT(*) FROM `khachhang` WHERE `TenDangNhap` = '$username' AND `MatKhau` = '$password'";
		$stmt = $db->prepare($sql);
		$stmt->execute();
		$count = $stmt->fetchColumn();
		//$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		//$stmt->closeCursor();
		return $count;

	// 	$sql = "SELECT COUNT(*) FROM `user` WHERE `username` = '$username' AND `password` = '$password'";
	
	// //$row_user = mysql_fetch_array($qr);
	// if(mysql_num_rows($qr) != 0){
	// 	$_SESSION['username'] = $row_user['username'];
	// 	$_SESSION['password'] = $row_user['password'];
	// 	$_SESSION['email'] = $row_user['email'];
	// 	header('location:index.php');
	// }
	}


}

?>