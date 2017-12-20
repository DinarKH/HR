<?php
	/**
	* 
	*/
	class Resume
	{
		
		function __construct()
		{
		}

		public static function checkName($name){
			if(strlen($name)>3){
				return true;
			}else{
				return false;
			}
		}

		public static function makeQuerry($name,$mail,$text){
			$params=array(
				'host'=>'localhost',
				'dbname'=>'hr',
				'user' => 'root',
				'pass' => '',
			);
			$dbh=new PDO('mysql:host='.$params['host'].'; dbname='.$params['dbname'].'; charset=utf8',$params['user'],$params['pass']);
			$dbh->exec("INSERT INTO resume(name,mail,text) values ('".$name."','".$mail."','".$text."')");
		}
	}
?>