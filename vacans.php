<?php	
	$params=array(
		'user'=>'root'
		'pass' => '',
	);
	$user='root';
	$pass='';
	$sql = 'SELECT * FROM vacancies';
	$dbh=new PDO('mysql:host=localhost; dbname=hr; charset=utf8',{$params['user']},{$params['pass']});
	foreach ($dbh->query($sql) as $val) {
		echo sprintf('<div class="first ">%s<br><img src="images/%s" class=minImg> </div>',$val['name'],$val['image']);
	}
	echo "</div>";
?>
