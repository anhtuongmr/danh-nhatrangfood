<?php 
class Mon{
	public static function view(){
		//$ds = QuanAnModel::get_all();
		//$ds = MonModel::get_get_all();
		require "views/mon/index.php";
	}

	public static function delete(){
		if(isset($_GET['id'])){
			ModelEmployee::delete_by_id($_GET['id']);
			header('location:?controller=mon&action=view');
		}else{
			header('location:.');
		}
	}
}

?>