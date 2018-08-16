<?php 
class MasterModel{
	public static function get_all_from_table($table){
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

	//Select 1 bảng có 1 điều kiện
	public static function get_one_from_table_where_column($table, $column, $value){
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

	public static function delete_row_from_table($table, $column, $value){
		//$db = Database::connect();
		$db = new PDO('mysql:host=localhost;dbname=q2','root','');
		$db->exec('SET NAMES utf8');

		$sql = "DELETE FROM $table WHERE $column = :value";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':value', $value);
		$stmt->execute();
		//$stmt->closeCursor();
	}

}

?>