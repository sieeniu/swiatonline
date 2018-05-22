<?php
error_reporting(E_ALL); // poziom raportowania, http://pl.php.net/manual/pl/function.error-reporting.php
ini_set('display_errors', 1);


    session_start();

    if(!isset($_SESSION['lang'])) {
        $_SESSION['lang'] = 'pl'; // Domyślny język
    }
    else {
        if(isset($_GET['lang']) && $_GET['lang'] == 'en') {
            $_SESSION['lang'] = 'en'; // Zmiana języka na angielski
        }
        if(isset($_GET['lang']) && $_GET['lang'] == 'pl') {
            $_SESSION['lang'] = 'pl'; // Zmiana języka na polski
        }
    }

   require_once('./lang/nav.lang.php');
   require_once('./lang/index.lang.php');


?>
    <!DOCTYPE HTML>
    <html lang="pl-PL" prefix="og: http://ogp.me/ns#">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Świat online to strona poświęcona sieci Internet, sieci która odgrywa coraz to większy udział w życiu człowieka. 
Mało kto dziś wyobraża sobie życie bez dostępu do tego medium.">
        <meta property="og:locale" content="pl_PL">
        <meta property="og:title" content="Świat Online - Strona Główna">
        <meta property="og:description" content="Świat online to strona poświęcona sieci Internet, sieci która odgrywa coraz to większy udział w życiu człowieka. 
Mało kto dziś wyobraża sobie życie bez dostępu do tego medium.">
        <meta property="og:url" content="https://pawelsieniewicz.pl/">
        <meta property="og:site_name" content="Świat Oline">
        <meta property="og:image" content="https://pawelsieniewicz.pl/img/home-bg.jpg" />
        <meta property="og:type" content="website">
        <title>
            <?php echo $translate[$_SESSION['lang']]['title']; ?>
        </title>
        <link rel="stylesheet" href="./css/style.min.css" type="text/css">
        <link href="../css/fontawesome-all.css" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="../img/favicon.png" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600i,800r" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <div class="nav">
                <a href="/" class="logo">Świat <b>Online</b></a>
                <label for="toggle">&#9776;</label>
                <input type="checkbox" id="toggle" />
                <div class="menu">
                    <a href="/rozwoj-it/">
                        <?php echo $translate[$_SESSION['lang']]['nav_tab1']; ?>
                    </a>
                    <a href="/mozliwosci/">
                        <?php echo $translate[$_SESSION['lang']]['nav_tab2']; ?>
                    </a>
                    <a href="/niebezpieczenstwo/">
                        <?php echo $translate[$_SESSION['lang']]['nav_tab3']; ?>
                    </a>
                    <a href="/o-nas/">
                        <?php echo $translate[$_SESSION['lang']]['nav_tab4']; ?>
                    </a>
                    <?php 
                                if($_SESSION['lang'] == 'pl') {
                                    echo '<a href="?lang=en" title="Change to english version"><img alt="Flaga GB" src="./img/gb.png"></a>'; } 
                                elseif($_SESSION['lang'] == 'en') { 
                                    echo '<a href="?lang=pl" title="Zmień na Polską wersje"><img alt="Flaga PL" src="./img/pl.png"></a>'; } 
                            ?>
                </div>
            </div>
            <section class="main" id="home">
                <div class="flex-center-1 headline">
                    <h2 class="coding-animation">&lt;?php echo "
                        <?php echo $translate[$_SESSION['lang']]['index_title']; ?>"; ?><span></span></h2>
                    <h4 class="flip">SELECT * FROM
                        <?php echo $translate[$_SESSION['lang']]['index_description']; ?>;</h4>
                    <p class="qm">"640 KB pamięci operacyjnej powinno każdemu wystarczyć." ~ Bill Gates</p>
                </div>
            </section>

            <main>
                <section class="secondary" id="zycie-w-sieci">
                    <div class="title">
                        <h3>
                            <?php echo $translate[$_SESSION['lang']]['index_title_text']; ?>
                        </h3>
                        <div class="title-back">
                            <?php echo $translate[$_SESSION['lang']]['index_title_back']; ?>
                        </div>
                        <span class="section-line"></span>
                        <p class="index">
                            <?php echo $translate[$_SESSION['lang']]['index_text']; ?>
                        </p>
                    </div>
                    <div class="grid-3b2">
                        <div class="box">
                            <div class="bg code"></div>
                        </div>
                        <div class="box big-col">
                            <div class="bg wires"></div>
                        </div>
                        <div class="box big-col">
                            <div class="bg db"></div>
                        </div>
                        <div class="box">
                            <div class="bg cpu"></div>
                        </div>
                    </div>
                </section>
            </main>
            <footer>
                <div class="top">
                    <div class="flex-center-1">
                        <div class="grid-2 light">
                            <div class="col">
                                <div class="title text-right">
                                    <h3>Szybki kontakt</h3>
                                    <div class="name">
                                        <h5>Paweł Sieniewicz</h5>
                                        <p class="text">psieniewicz@tzn.edu.pl</p>
                                        <h5>Damian Rybak</h5>
                                        <p class="text">drybak@tzn.edu.pl</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="title text-left">
                                    <h3>Nasz opiekun</h3>
                                    <div class="name">
                                        <h5>Sebastian Ślemp</h5>
                                        <p class="text margin">„Nauczyciel to ktoś, kto służy dla dobra swych uczniów, dlatego musi być gotów znieść wszelkie kłopoty i trudy na drodze do celu, którym jest obywatelskie, moralne i naukowe wychowanie uczniów". Sebastian Ślemp</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bot">Paweł Sieniewicz & Damian Rybak | Graphics is from stock pexels.com</div>
            </footer>
        </div>
    </body>

    </html>
