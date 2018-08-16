<?php 
require_once '../config/db.php';

//Kiem tra ket noi
//$conn = Database::connect();

if(isset($_GET['controller'], $_GET['action'])){
	$controller = $_GET['controller'];
	$action = $_GET['action'];
}
else{
	$controller = 'home';
	$action = 'view';
}
//var_dump($controller, $action);

require_once 'views/admin.php';
?>