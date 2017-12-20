<!DOCTYPE html>
<html>
<head>
	<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="script.js"></script>
	<title>О нас</title>
</head>
<body>
	<div id=wrap>
		<header>
			<div class="container">
				<img src="logo.png" class="logo">
				<nav>
					<ul class="listmenu">
						<li>
							<a href="./index.php">О нас</a>
						</li>
						<li>
							<a href="./listvac.php">Вакансии</a>
						</li>
						<li>
							<a href="./resume.php">Оставить резюме</a>
						</li>
						<li>
							<a href="./info.php">Контакты</a>
						</li>
					</ul>
				</nav>
			</div>
		</header>
		<div class="headPage"> 
			<img src="images/about.png" align="left" class="imgAb"> 
			<p class="theme">
				<?php
					$t = file_get_contents('file.txt');
					$get  = mb_detect_encoding($t, array('utf-8', 'cp1251'));
					echo iconv($get,'UTF-8',$t);
				?>	
			</p>
		</div>
	</div>
	<div id="centr">
		<img src="images/up.png" alt="" id="jak">
	</div>

</html>