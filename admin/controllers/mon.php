<?php 
class MonAnController{
	public static function view(){
		//$ds = ModelQuanAn::get_all();
		//$ds = ModelMon::get_get_all();
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