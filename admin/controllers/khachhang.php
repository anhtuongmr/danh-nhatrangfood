<?php 
class KhachHangController{
	public static function view(){
		$dskh = KhachHangModel::get_all();
		require "views/khachhang/view.php";
	}
}
?>