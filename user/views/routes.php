<?php 
require_once 'user/controllers/'.$controller.'.php';
require_once 'user/models/master.php';

switch ($controller) {
	case 'home':
		$controller = new Home();
		require_once 'user/models/quanan.php';
		require_once 'user/models/mon.php';
		//Home::index();
		//$controller->index();
		
		break;

	case 'quanan';
	$controller = new QuanAn();
	require_once 'user/models/quanan.php';
	break;

	case 'chitiet';
	$controller = new ChiTiet();
	require_once 'user/models/mon.php';
	require_once 'user/models/danhgia.php';
	require_once 'user/models/quanan.php';
	break;

	case 'khachhang':
	$controller = new KhachHangController();
	require_once 'user/models/khachhang.php';
	break;

}

$controller->{$action}();


?>