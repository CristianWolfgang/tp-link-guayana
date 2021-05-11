<?php
	/**
	 * 
	 */
	class Connect
	{
		
		public static function connection(){
			try{

				$config = require './model/config.php';
				$connection = new mysqli($config["host"], $config["user"], $config["pass"], $config["db"]);
				$connection->query("SET NAMES 'UTF8'");
				if(mysqli_connect_errno()){
					throw new Exception("fallo en la conexión". $connection->connect_errno());
				}
				return $connection;
			}catch(Exception $err){
				echo $err;
				exit();
			}
		}
	}

?>