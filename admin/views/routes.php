<?php 
require_once 'controllers/'.$controller.'.php';
require_once 'models/master.php';

switch ($controller) {

	case 'quanan':
	$controller = new QuanAnController();
	require_once 'models/quanan.php';
	break;

	case 'mon':
	$controller = new MonController();
	require_once 'models/monan.php';
	break;

	case 'khachhang':
	$controller = new KhachHangController();
	require_once 'models/khachhang.php';

	default:
		$controller = new HomeController();
		//Home::index();
		break;
}

$controller->{$action}();


?>