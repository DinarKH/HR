<?php  	
	class Vacans{
		public static function getVacansList(){
			$params=array(
				'host'=>'localhost',
				'dbname'=>'hr',
				'user' => 'root',
				'pass' => '',
			);
			$dbh=new PDO('mysql:host='.$params['host'].'; dbname='.$params['dbname'].'; charset=utf8',$params['user'],$params['pass']);
			$sql = 'SELECT * FROM vacancies ';
			$vacansList;
			$i=0;
			$result=$dbh->query($sql);
			while($row=$result->fetch()){
				$vacansList[$i]['id']=$row['id'];
				$vacansList[$i]['name']=$row['name'];
				$vacansList[$i]['image']=$row['image'];
				$i++;
			}		

			return $vacansList;
		}
	}

?>