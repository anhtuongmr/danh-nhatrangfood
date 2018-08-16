<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DEMO MVC</title>
	<link rel="stylesheet" href="public/css/custom.css">
</head>
<body>
	<nav>
		<a href="." class ="<?php echo !isset($_GET['controller']) ? 'active': null ?>">Home</a>
		<a href="?controller=employee&action=view" class="<?php echo (isset($_GET['controller']) and $_GET['controller'] === 'employee') ? 'active' : null ?>">Employee</a>
		<a href="?controller=quanan&action=view" class="<?php echo (isset($_GET['controller']) and $_GET['controller'] === 'quanan') ? 'active' : null ?>">Quán ăn</a>
	</nav>

	<hr>
	
	<main>
		<?php require_once 'routes.php' ?>
	</main>

	<hr>

	<footer>
		@Copy right
	</footer>
</body>
</html>