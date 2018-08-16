<?php 
class MasterModel{
	public static function get_all_from($table){
		//$db = Database::connect();
		$db = new PDO('mysql:host=localhost;dbname=q2','root','');
		$db->exec('SET NAMES utf8');

		$sql = "SELECT * FROM $table";
		$stmt = $db->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		//$stmt->closeCursor();
		return $result;
	}

	public static function get_num_rows_from_table($table){
		$db = new PDO('mysql:host=localhost;dbname=q2','root','');
		$db->exec('SET NAMES utf8');

		$sql = "SELECT COUNT(*) FROM $table";
		$stmt = $db->prepare($sql);
		$stmt->execute();
		$count = $stmt->fetchColumn();
		//$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		//$stmt->closeCursor();
		return $count;
	}

	//Select 1 bảng có 1 điều kiện
	public static function get_one_from_where_id($table, $column, $value){
		//$db = Database::connect();
		$db = new PDO('mysql:host=localhost;dbname=q2','root','');
		$db->exec('SET NAMES utf8');
		
		$sql = "SELECT * FROM $table WHERE $column = :value";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':value', $value);
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		//$stmt->closeCursor();
		return $result;
	}

	//Select 1 bảng có 1 điều kiện
	public static function get_all_from_where_id($table, $column, $value){
		//$db = Database::connect();
		$db = new PDO('mysql:host=localhost;dbname=q2','root','');
		$db->exec('SET NAMES utf8');
		
		$sql = "SELECT * FROM $table WHERE $column = :value";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':value', $value);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		//$stmt->closeCursor();
		return $result;
	}

	public static function get_all_from_wheres($table, $column1, $value1, $colum2, $value2){
		//$db = Database::connect();
		$db = new PDO('mysql:host=localhost;dbname=q2','root','');
		$db->exec('SET NAMES utf8');
		
		$sql = "SELECT * FROM $table WHERE $column1 = :value1 AND $colum2 = :value2";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':value1', $value1);
		$stmt->bindParam(':value2', $value2);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		//$stmt->closeCursor();
		return $result;
	}


	public static function delete($table, $column, $value){
		$db = Database::connect();

		$sql = "DELETE FROM $table WHERE $column = :value";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':value', $value);
		$stmt->execute();
		//$stmt->closeCursor();
	}

	public static function insert(){
		$db = new PDO('mysql:host=localhost;dbname=q2','root','');
		$db->exec('SET NAMES utf8');

		$sql = "INSERT INTO $table ";
	}

	public static function update($id){
		$db = new PDO('mysql:host=localhost;dbname=q2','root','');
		$db->exec('SET NAMES utf8');


		
		$sql = "";
	}
}

?>