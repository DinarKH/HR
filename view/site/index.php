<!DOCTYPE html>
<html lang="ru-RU" class="no-js">
    <head>
        <meta charset="utf-8"/>
        <title>Отдел Кадров</title>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/animate.css" rel="stylesheet">
        <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>
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
                            <a class="navbar-logo-wrap" href="./">
                                <img class="navbar-logo-img" src="img/logo.png">
                            </a>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="navbar-nav navbar-nav-right">
                                <li class="nav-item">
                                    <a class="nav-item-child" href="./">
                                        О нас
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item-child" href="./vacans/1">
                                        Вакансии
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item-child" href="./resume/">
                                        Резюме
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item-child" href="./info/">
                                        Контакты
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
         <div class="content-md container">
            <div class="row margin-b-20">
                <div class="col-sm-6">
                    <h2>О нас</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-7 sm-margin-b-50">
                    <div class="margin-b-30">
                        <p>
                            <?php
                                $t = file_get_contents('file.txt');
                                $get  = mb_detect_encoding($t, array('utf-8', 'cp1251'));
                                echo iconv($get,'UTF-8',$t);
                            ?> 
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 col-sm-offset-1">
                    <img class="img-responsive" src="images/about.png" alt="Our Office">
                </div>
            </div>
        </div>
        <div class="section-seperator">
            <div class="content-md container">
                <div class="row">
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <h3>Опыт</h3>
                            <p>Более 10 лет работы на рынке</p>
                        </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                            <h3>Иновации</h3>
                            <p>Победа в номинаци "Отдел кадров года"</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class=" fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <h3>Репутация</h3>
                            <p>Положительные отзывы работников </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="section-seperator">
                <div class="content container">
                    <div class="row">
                        <div class="col-xs-6">
                            <img class="footer-logo" src="img/logo.png">
                        </div>
                        <div class="col-xs-6 text-right">
                            <p class="margin-b-0"><a class="fweight-700">Отдел Кадров</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>