<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b8ba9d94f28aff";$this->pass="a8337514";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_f51a3950727cd14";
		//Copiar también la información de la conexión en la función de abajo connect()
	}

	function connect(){
		//Copiar aquí también la info de la conexión
		$this->user="b643f2c84e3efe";$this->pass="5a5e4169";$this->host="eu-cdbr-west-03.cleardb.net";$this->ddbb="heroku_3709d33bc5d959a";
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
