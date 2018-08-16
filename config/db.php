<?php 
class Database{
	public static $db;
	private static $dsn = 'mysql:host=localhost;dbname=q';
	private static $username = 'root';
	private static $passwd = '';

	public static function connect(){
		if(!isset(self::$db)){
			try{
				self::$db = new PDO(self::$dsn, self::$username, self::$passwd);
				self::$db->exec('SET NAMES utf8');
			}catch(PDOException $e){
				echo 'Error '.$e->getMessage();
			}
			return self::$db;
		}
	}
}
?>