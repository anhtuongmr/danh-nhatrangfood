<?php 
class QuanAnController{
	public static function view(){
		$dsqa = QuanAnModel::get_all();
		require "views/quanan/view.php";
	}

	public static function insert(){
		if(isset($_POST['submit'])){
			$tenquanan = $_POST['tenquanan']; 
			$diachi = $_POST['diachi'];
			$sodienthoai = $_POST['sodienthoai'];
			$email = $_POST['email'];
			$facebook = $_POST['facebook'];
			$website = $_POST['website'];
			$giohoatdong = $_POST['giohoatdong'];
			$gioithieuchung = $_POST['gioithieuchung'];
			$view = $_POST['view'];
			$id_phuongxa = $_POST['id_phuongxa'];
			$bando = $_POST['bando'];
			QuanAnModel::insert($tenquanan, $diachi, $sodienthoai, $email, $facebook, $website, $giohoatdong, $gioithieuchung, $view, $id_phuongxa, $bando);
		}
		
		require "views/quanan/insert.php";
	}

	public static function update(){
		if(isset($_GET['id'])){
			$id = $_GET['id'];
		}
		else{
			$id = '';
		}

		$quanan = QuanAnModel::get_one_from_table_where_column('quanan', 'ID', $id);
			//var_dump($quanan);
		if(isset($_POST['tenquanan'])){
			$tenquanan = $_POST['tenquanan'];
		}
		else{
			$tenquanan = '';
		}
		if(isset($_POST['diachi'])){
			$diachi = $_POST['diachi'];
		}
		else{
			$diachi = '';
		}
		if(isset($_POST['sodienthoai'])){
			$sodienthoai = $_POST['sodienthoai'];
		}
		else{
			$sodienthoai = '';
		}
		if(isset($_POST['email'])){
			$email = $_POST['email'];
		}
		else{
			$email = '';
		}
		if(isset($_POST['facebook'])){
			$facebook = $_POST['facebook'];
		}
		else{
			$facebook = '';
		}
		if(isset($_POST['website'])){
			$website = $_POST['website'];
		}
		else{
			$website = '';
		}
		if(isset($_POST['giohoatdong'])){
			$giohoatdong = $_POST['giohoatdong'];
		}
		else{
			$giohoatdong = '';
		}
		if(isset($_POST['gioithieuchung'])){
			$gioithieuchung = $_POST['gioithieuchung'];
		}
		else{
			$gioithieuchung = '';
		}
		if(isset($_POST['view'])){
			$view = $_POST['view'];
		}
		else{
			$view = '';
		}
		if(isset($_POST['id_phuongxa'])){
			$id_phuongxa = $_POST['id_phuongxa'];
		}
		else{
			$id_phuongxa = '';
		}
		if(isset($_POST['bando'])){
			$bando = $_POST['bando'];
		}
		else{
			$bando = '';
		}
			// $diachi = $_POST['diachi'];
			// $sodienthoai = $_POST['sodienthoai'];
			// $email = $_POST['email'];
			// $facebook = $_POST['facebook'];
			// $website = $_POST['website'];
			// $giohoatdong = $_POST['giohoatdong'];
			// $gioithieuchung = $_POST['gioithieuchung'];
			// $view = $_POST['view'];
			// $id_phuongxa = $_POST['id_phuongxa'];
			// $bando = $_POST['bando'];
		QuanAnModel::update($id,$tenquanan, $diachi, $sodienthoai, $email, $facebook, $website, $giohoatdong, $gioithieuchung, $view, $id_phuongxa, $bando);
		$thongbao = "<p class='green'>Cập nhật thành công</p>";

		require "views/quanan/update.php";
	}

	public static function delete(){
		if(isset($_GET['id'])){
			QuanAnModel::delete_by_id($_GET['id']);
			header('location:?controller=quanan&action=view');
		}else{
			header('location:.');
		}
	}
}

?>