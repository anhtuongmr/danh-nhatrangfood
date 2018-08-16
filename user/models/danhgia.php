<?php 
class DanhGiaModel extends MasterModel{

	public static function get_all(){
		return parent::get_all_from('danhgia');
	}

	public static function Hienthi($id_quanan){
		$db = new PDO('mysql:host=localhost;dbname=q2','root','');
		$db->exec('SET NAMES utf8');

		$sql = "SELECT dg.ID_QuanAn, dg.ID_KhachHang, qa.TenQuanAn, dg.BinhLuan, dg.ID, kh.TenDangNhap  FROM danhgia dg JOIN quanan qa ON qa.ID = dg.ID_QuanAn JOIN khachhang kh ON kh.ID = dg.ID WHERE dg.ID_QuanAn = $id_quanan";

		$stmt = $db->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		//$stmt->closeCursor();
		return $result;
	}


	public static function get_id($id){
		return parent::get_one_from_where_id('danhgia', 'ID_QuanAn', $id);
	}

	public static function BinhLuan(){
		$db = new PDO('mysql:host=localhost;dbname=q2','root','');
		$db->exec('SET NAMES utf8');

		$sql = "INSERT INTO `danhgia` (`ID`, `BinhLuan`, `ThoiGian`, `GiaCa`, `ChatLuong`, `ViTri`, `PhucVu`, `KhongGian`, `ID_QuanAn`, `ID_KhachHang`) VALUES (NULL, '$binhluan', $thoigian, '$giaca', '$chatluong', '$vitri', '$phucvu', '$khonggian', '$id_quanan', 'id_khachhang') ";
		$stmt = $db->prepare($sql);
		$stmt->execute();
	}

}

?>