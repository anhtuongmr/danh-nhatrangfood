<?php 
class QuanAnModel extends MasterModel{
	public static function get_all(){
		return parent::get_all_from('quanan');
	}

	public static function get_id($id){
		return parent::get_one_from_where_id('quanan', 'ID', $id);
	}

	public static function get_all_and_images(){
		$db = new PDO('mysql:host=localhost;dbname=q2','root','');
		$db->exec('SET NAMES utf8');

		$sql = "SELECT q.ID, q.TenQuanAn, q.DiaChi, q.GioHoatDong, h.UrlHinhAnh FROM quanan q JOIN hinhanhquanan h ON q.ID = h.ID_QuanAn WHERE h.UrlHinhAnh LIKE '%01%'";
		$stmt = $db->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		//$stmt->closeCursor();
		return $result;
	}

	public static function get_one_and_images_by_id($id){
		$db = new PDO('mysql:host=localhost;dbname=q2','root','');
		$db->exec('SET NAMES utf8');

		$sql = "SELECT q.ID, q.TenQuanAn, q.DiaChi, q.GioHoatDong, h.UrlHinhAnh FROM quanan q JOIN hinhanhquanan h ON q.ID = h.ID_QuanAn WHERE h.UrlHinhAnh LIKE '%01%' AND q.ID = $id";
		$stmt = $db->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		//$stmt->closeCursor();
		return $result;
	}

	public static function delete_by_id($id){
		parent::delete('quanan','id',$id);
	}


}

?>