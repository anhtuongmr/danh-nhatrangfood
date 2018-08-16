<?php 
class QuanAn{
	public static function view(){
		$ds = QuanAnModel::get_all();
		require "views/quanan/index.php";
	}

	public static function book_table(){
		require "views/quanan/datban.php";
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