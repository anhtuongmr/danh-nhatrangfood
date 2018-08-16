<?php 
class KhachHangController{

	public static function dangnhap(){
		$tendangnhap = $_POST['tendangnhap'];
		echo $tendangnhap;
		$matkhau = $_POST['matkhau'];
		echo $matkhau;
		$num_rows = KhachHangModel::check_login($tendangnhap, $matkhau);
		echo $num_rows;
		if($num_rows != 0){
			$_SESSION['tendangnhap'] = $tendangnhap;
			$_SESSION['matkhau'] = $matkhau;
			if (isset($_SESSION['tendangnhap']))
			    unset($_SESSION['tendangnhap']); 
			  if(isset($_SESSION["matkhau"]))
			    unset($_SESSION['matkhau']);
			$thongbao = '<p style="color:green">Đăng nhập thành công!</p>';
			//header('location:.');
		}
		else{
			$thongbao = '<p style="color:red">Tên đăng nhập hoặc mật khẩu không đúng. Vui lòng nhập lại!</p>';
		}
		require "user/views/khachhang/dangnhap.php";
	}

}

?>