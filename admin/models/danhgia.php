<?php 
class DanhGiaModel extends MasterModel{
	public static function get_id($id){
		return parent::get_one_from_where_id('danhgia', 'ID_QuanAn', $id);
	}

}

?>