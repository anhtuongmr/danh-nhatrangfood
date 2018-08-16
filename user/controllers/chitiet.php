<?php 
class ChiTiet{
	public static function view(){
		$id = $_GET['id'];

		$dsmon = MonModel::get_all_id($id);
		$quanan = QuanAnModel::get_id($id);
		$danhgia = DanhGiaModel::get_id($id);
		$binhluan = DanhGiaModel::HienThi($id);
		$image = QuanAnModel::get_one_and_images_by_id($id);
		require "user/views/chitietquanan/index.php";
	}

	public static function delete(){
		if(isset($_GET['id'])){
			ModelEmployee::delete_by_id($_GET['id']);
			header('location:?controller=quanan&action=view');
		}else{
			header('location:.');
		}
	}
}

?>