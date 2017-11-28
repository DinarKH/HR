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
	<div>

</div>
<table class="menu">
	<tr>
		<td onclick="showInfo()">О нас</td>
		<td onclick="vacansies()">Вакансии</td>
		<td onclick="application()">Оставить резюме</td>
		<td onclick="contact()">Контакты</td>
	</tr>
</table>
<div id="aboutText"> <img src="images/about.png" align="left" class="imgAb"> <p class="theme">Битва полов (англ. Battle of the Sexes) — матч 1973 года между ветераном мужского тенниса Бобби Риггсом и одной из ведущих профессиональных теннисисток этого времени Билли Джин Кинг. Матч, проходивший в Хьюстоне (Техас) с большой помпой и собравший рекордную для теннисной встречи аудиторию, состоялся на фоне борьбы женщин-теннисисток за равные призовые с мужчинами, которую возглавляла Кинг, и, закончившись её победой, значительно способствовал достижению этой цели. Позже Кинг использовала свою популярность при поддержке поправки в законодательство США, известной как «Раздел IX» и предоставляющей женщинам равные права на получение спортивных стипендий во время учёбы в университете. В дальнейшем высказывались предположения, что Риггс мог сознательно проиграть матч, однако документального подтверждения они не получили.
<?php
	$a=1;
	$a=$a+2;
	echo $a;
?>	
</p></div>
<div id="netVac" class="invis">
	<div class="first ">Сварщик<br><img src="images/1.jpg" class=minImg> </div>
	<div class="first ">Перевозчик <br><img src="images/2.jpg" class=minImg> </div>
	<div class="first ">Сроитель <br><img src="images/3.jpg" class=minImg> </div>
</div>
<div id="formApp" class="invis">
	<form id="form">
		<p>Как к вам обращаться</p>
		<input type="text" name="name" size="40" placeholder="Имя Фамилия" value="Петя Петров" required>
		<p>Почтовый адрес</p>
		<input type="text" name="mail" size="40" placeholder="Почта"  value="example@mail.ru" required><br>
		<textarea name="resume" cols="80" rows="15"></textarea><br>
		<input type="submit" name="" size="40">

	</form>
</div>
<div id="reun" class="invis"><p class="a">Ленина 1 <br>11-11-11<br>example@mail.ru </p></div>
</html>