<?php
	/**
	* 
	*/
	class OneResume
	{
		
		function __construct()
		{
			# code...
		}

		public static function checkName($name){
			if(strlen($name)>3){
				return true;
			}else{
				return false;
			}
		}
	}
?>