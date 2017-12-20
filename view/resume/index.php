<!DOCTYPE html>
<html lang="ru-RU" class="no-js">
    <head>
        <meta charset="utf-8"/>
        <title>Отдел Кадров</title>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="../../vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/animate.css" rel="stylesheet">
        <link href="../../vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/layout.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header class="header">
            <nav class="navbar" role="navigation">
                <div class="container">
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only"></span>
                            <span class="toggle-icon"></span>
                        </button>
                        <div class="navbar-logo">
                            <a class="navbar-logo-wrap" href="../">
                                <img class="navbar-logo-img" src="../../img/logo.png">
                            </a>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="navbar-nav navbar-nav-right">
                                <li class="nav-item">
                                    <a class="nav-item-child" href="../">
                                        О нас
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item-child" href="../vacans/1">
                                        Вакансии
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item-child" href="./">
                                        Резюме
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item-child" href="../info/">
                                        Контакты
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
                <div class="section-seperator">
            <div class="content-md container">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Отправить резюме</h2>                        
                    </div>
                </div>
                
                <?php if(isset($errors) && is_array($errors)):?>
					<li>
						<?php foreach ($errors as $error):?>
						<ul> 
							<?php echo $error;?>
						</ul>
						<?php endforeach;?>
					</li>
				<?php endif;?>
                <div class="row">
                    <div class="col-md-5 col-sm-7">
                        <form>
                            <div class="margin-b-10">
                                <input type="text" class="form-control" placeholder="Имя">
                            </div>
                            <div class="margin-b-10">
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                            <div class="margin-b-20">
                                <textarea class="form-control" rows="5" placeholder="Текст"></textarea>
                            </div>
                            <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       <footer class="footer">
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="footer-logo" src="../../img/logo.png">
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="margin-b-0"><a class="fweight-700">Отдел Кадров</p>
                    </div>
                </div>
            </div>
        </footer>
        <script src="../../vendor/jquery.min.js" type="text/javascript"></script>
        <script src="../../vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../vendor/jquery.back-to-top.js" type="text/javascript"></script> 
    </body>
</html>