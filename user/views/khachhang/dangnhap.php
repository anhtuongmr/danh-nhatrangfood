<style>
		*{margin: 0; padding: 0;}
		body{
			background-image: url(../images/bg1.png);
		}
		table {
			padding: 20px;
			width: 38%;
			/* height: 235px; */
			/* border: 0.5px solid #ccc; */
			font-size: 20px;
			border-collapse: collapse;
			margin: 10px auto;
			color: #094961;
			background-color: #e5e6e8;
			border-radius: 5px;
			box-shadow: 0px 0px 10px 3px #6f6767;
		}
		table th {
			text-align: left;
			padding: 5px;
			padding-left: 30px;
		}
		table td{
			text-align: left;
			padding:5px;
		}
		.TieuDe h2 {
			text-align: center;
			font-size: 40px;
			padding: 15px 0px;
			margin-bottom: 45px;
			text-align: center;
			border-bottom: 1px solid #c3c3c3;
			font-weight: bold;
			/* color: white; */
		}
		.input {
			width: 90%;
			padding: 7px 0%;
			margin-left: 25px;
			/* margin-right: 8px; */
			/* margin: auto; */
			border-radius: 5px;
			color: black;
			font-size: 18px;
			background-color: white;
			border-color: #f9f6f6;
			margin-bottom: 20px;
		}
		.input:focus{
			background-color: #f9f9f9;
		}
		.button {
			font-size: 18px;
			padding: 12px;
			border-radius: 5px;
			box-shadow: 0px 0px 5px 1px #464444;
			color: #fff;
			background-color: #2f5c75;
			/* border-color: #2e6da4; */
			font-weight: bold;
			float: right;
			margin-right: 31px;
			margin-bottom: 57px;
			transition: 0.6s;
		}
		.button:hover{
			color: #fff;
			background-color: #3d8d9e;
			border-color: #204d74;
		}
		.button:focus
		{
			color: #fff;
			background-color: #5a6269;
			border-color: #122b40;
		}
	</style>
	<?php 
	// $_SESSION['username'] = "danhteo";
	// echo $_SESSION['username'];
	// if(!isset($_SESSION['username'])){
	// 	echo "You are not loged in!";
	// }
	// else {
	// 	echo "You are loged in!";
	// }
	?>
	<form action="" method="POST">
		<table>
			<tr>
				<td class="TieuDe"><h2>Đăng nhập</h2></td>
			</tr>
			<tr>
				<th><h3>Nhập Email hoặc Username:</h3></th>
			</tr>
			<tr>
				<td><input type="text" class="input" name="tendangnhap" placeholder="mymail@mail.com"></td>
			</tr>
			<tr>
				<th><h3>Nhập vào password:</h3></th>
			</tr>
			<tr>
				<td><input type="password" class="input" name="matkhau" placeholder=" password"></td>
			</tr>
			<tr>
				<td><input type="submit" name="dangnhap" value="Đăng nhập" class="button"></td>
			</tr>
		</table>
	</form>