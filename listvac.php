<!DOCTYPE html>

<html>
<head>
	<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="script.js"></script>
	<title></title>
	
	<script>
		
  	</script>
</head>
<body>
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
	<?php
	require('vacans.php');
	?>
	<div class="footer">
		<p id="footer-text">
			Разработал Халимов Динар 2017
		</p>
	</div>
</body>
</html>
	<?phpforeach ($vacansList as $vacansItem ): ?>
	<br><?php echo $vacansItem['name'];?>
	ddada
	<?php endforeach; ?>