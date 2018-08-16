<?php 
class QuanAnModel extends MasterModel{
	public static function get_all(){
		return parent::get_all_from_table('quanan');
	}

	public static function delete_by_id($id){
		parent::delete_row_from_table('quanan','id',$id);
	}

	public static function insert($tenquanan, $diachi, $sodienthoai, $email, $facebook, $website, $giohoatdong, $gioithieuchung, $view, $id_phuongxa, $bando){
		$db = new PDO('mysql:host=localhost;dbname=q2','root','');
		$db->exec('SET NAMES utf8');

		$sql = "INSERT INTO `quanan` (`ID`, `TenQuanAn`, `DiaChi`, `SoDienThoai`, `Email`, `Facebook`, `Website`, `GioHoatDong`, `GioiThieuChung`, `View`, `ID_PhuongXa`, `BanDo`) VALUES (NULL, '$tenquanan', '$diachi', '$sodienthoai', '$email', '$facebook', '$website', '$giohoatdong', '$gioithieuchung', '$view', '$id_phuongxa', '$bando')";
		$stmt = $db->prepare($sql);
		$stmt->execute();
	}

	public static function update($id,$tenquanan, $diachi, $sodienthoai, $email, $facebook, $website, $giohoatdong, $gioithieuchung, $view, $id_phuongxa, $bando){
		$db = new PDO('mysql:host=localhost;dbname=q2','root','');
		$db->exec('SET NAMES utf8');

		$sql = "UPDATE `quanan` SET `TenQuanAn` = '$tenquanan', `DiaChi` = '$diachi', `SoDienThoai` = '$sodienthoai', `Email` = '$email', `Facebook` = '$facebook', `Website` = '$website', `GioHoatDong` = '$giohoatdong', `GioiThieuChung` = '$gioithieuchung', `View` = '$view', `ID_PhuongXa` = $id_phuongxa, `BanDo` = '$bando' WHERE `quanan`.`ID` = $id";
		$stmt = $db->prepare($sql);
		$stmt->execute();
	}

}

?>