<!DOCTYPE html>

<html>
<head>
	<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="script.js"></script>
	<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
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
	<div class="formApp">
		<form id="form">
			<p>Как к вам обращаться</p>
			<input type="text" name="name" size="40" placeholder="Имя Фамилия" value="Петя Петров" required>
			<p>Почтовый адрес</p>
			<input type="text" name="mail" size="40" placeholder="Почта"  value="example@mail.ru" required><br>
			<textarea name="resume" cols="80" rows="15"></textarea><br>
			<input type="submit" name="" size="40">
		</form>
	</div>
		<div class="footer">
		<p id="footer-text">
			Разработал Халимов Динар 2017
		</p>
	</div>
</body>
</html>