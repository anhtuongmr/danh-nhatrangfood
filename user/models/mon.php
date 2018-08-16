<?php 
class MonModel extends MasterModel{
	public static function get_all(){
		return parent::get_all_from('mon');
	}

	public static function get_all_id($id){
		return parent::get_all_from_where_id('mon', 'ID_QuanAn', $id);
	}

	public static function get_special(){
		return parent::get_all_from_where('mon','ID_LoaiMon',1);
	}

	public static function get_special_food(){
		return parent::get_all_from_wheres('mon', 'ID_LoaiMon', 1, 'ID_KieuMon', 1);
	}

	public static function get_special_drink(){
		return parent::get_all_from_wheres('mon', 'ID_LoaiMon', 1, 'ID_KieuMon', 2);
	}

	public static function delete_by_id($id){
		parent::delete('mon','id',$id);
	}

}

?>