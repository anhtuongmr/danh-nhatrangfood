<?php 
class KhachHangModel extends MasterModel{
	public static function get_all(){
		return parent::get_all_from_table('khachhang');
	}

	public static function get_id($id){
		return parent::get_all_from_where('khachhang', 'ID', $id);
	}

	public static function delete($id){
		parent::delete('khachhang','id',$id);
	}

	public static function insert(){
		$db = new PDO('mysql:host=localhost;dbname=q2','root','');
		$db->exec('SET NAMES utf8');

		$sql = "INSERT INTO `khachhang` (`ID`, `TenKhachHang`, `TenDangNhap`, `MatKhau`, `DiaChi`, `Email`, `SoDienThoai`) VALUES (NULL, 'Trần Đoàn Ngọc Bích', 'ngocbich', '1234', 'Khánh Hòa', 'ngocbich.55khhh@gmail.com', '0963622231');";
		$stmt = $db->prepare($sql);
		$stmt->execute();
	}

	public static function update($id){
		$db = new PDO('mysql:host=localhost;dbname=q2','root','');
		$db->exec('SET NAMES utf8');

		$sql = "UPDATE `khachhang` SET `TenKhachHang` = 'Cao Văn Danh', `TenDangNhap` = 'vandanh', `MatKhau` = '1234', `DiaChi` = 'Phú Yên', `Email` = 'caovandanhcntt1@gmail.com', `SoDienThoai` = '01673782786' WHERE `khachhang`.`ID` = 1;";
		$stmt = $db->prepare($sql);
		$stmt->execute();
		//$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		//$stmt->closeCursor();
		//return $result;
	}


}

?>