<?php 
class Home{
	public static function index(){
		$special_foods = MonModel::get_special_food();
		$special_drinks = MonModel::get_special_drink();
		//$dsmon = ModelMon::get_all();
		//$dsquanan = ModelQuanAn::get_all();
		$dsquanan = QuanAnModel::get_all_and_images();
	
		require "user/views/home/index.php";
	}
}
?>