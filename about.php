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
    require_once('./lang/about_us.lang.php');


?>

    <!DOCTYPE HTML>
    <html lang="pl-PL" prefix="og: http://ogp.me/ns#">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Podstrona zawierająca informacje o wykonawcach tej strony, 
opiekunie i szkole - Technicznych Zakładach Naukowych">
        <meta property="og:locale" content="pl_PL">
        <meta property="og:title" content="Świat Online - O nas">
        <meta property="og:description" content="Podstrona zawierająca informacje o wykonawcach tej strony, 
opiekunie i szkole - Technicznych Zakładach Naukowych">
        <meta property="og:url" content="https://pawelsieniewicz.pl/o-nas/">
        <meta property="og:site_name" content="Świat Oline">
        <meta property="og:image" content="https://pawelsieniewicz.pl/img/home-bg.jpg" />
        <meta property="og:type" content="website">
        <title>
            <?php echo $translate[$_SESSION['lang']]['title']; ?>
        </title>
        <link rel="stylesheet" href="../css/style.min.css" type="text/css">
        <link href="../css/fontawesome-all.css" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="../img/favicon.png" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600i,800r" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
				<script src="../js/map.js"></script>
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
                                    echo '<a href="?lang=en" title="English version"><img src="../img/gb.png"></a>'; } 
                                elseif($_SESSION['lang'] == 'en') { 
                                    echo '<a href="?lang=pl" title="Polska wersja"><img src="../img/pl.png"></a>'; } 
                            ?>
                </div>
            </div>
            <section class="main" id="home">
                <div class="flex-center-1 headline">
                    <h2 class="coding-animation">
                        <?php echo $translate[$_SESSION['lang']]['about_title']; ?><span></span></h2>
                    <h4>
                        <?php echo $translate[$_SESSION['lang']]['about_description']; ?>
                    </h4>
                    <p class="qm">
                        <?php echo $translate[$_SESSION['lang']]['about_quote']; ?>
                    </p>
                </div>
            </section>

            <main>
                <section class="secondary" id="zycie-w-sieci">
                    <div class="title">
                        <h3>
                            <?php echo $translate[$_SESSION['lang']]['about_main_title']; ?>
                        </h3>
                        <div class="title-back">
                            <?php echo $translate[$_SESSION['lang']]['about_main_title_back']; ?>
                        </div>
                        <span class="section-line"></span><br/>
                        <img src="../img/tzn-logo.png">
                    </div>
                    <div class="flex-center-1">
                        <div class="grid-3b2-a">
                            <div class="card">
                                <div class="head">
                                    <div class="picture">
                                        <img src="../img/pawelsieniewicz.jpg">
                                    </div>
                                    <h4>Paweł Sieniewicz</h4>
                                    <p>
                                        <?php echo $translate[$_SESSION['lang']]['about_team_our_pos']; ?>
                                    </p>
                                </div>
                                <div class="body">
                                    <a href="https://www.facebook.com/pawel.sieniewicz"><i class="fab fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/pawelsieniewicz/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="head">
                                    <div class="picture">
                                        <img src="../img/opiekun.jpg">
                                    </div>
                                    <h4>Sebastian Ślemp</h4>
                                    <p>
                                        <?php echo $translate[$_SESSION['lang']]['about_team_slemp_pos']; ?>
                                    </p>
                                </div>
                                <div class="body">
                                    <a href="https://www.facebook.com/sebastian.slemp.39"><i class="fab fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/skabeks/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="head">
                                    <div class="picture">
                                        <img src="../img/damianrybak.jpg">
                                    </div>
                                    <h4>Damian Rybak</h4>
                                    <p>
                                        <?php echo $translate[$_SESSION['lang']]['about_team_our_pos']; ?>
                                    </p>
                                </div>
                                <div class="body">
                                    <a href="https://www.facebook.com/dx.yz.5"><i class="fab fa-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="techniczne-zaklady-naukowe">
                    <div class="big-box">
                        <div class="parallax flex-prlx bg-big tzn-bg">
                            <h3>Techniczne Zakłady Naukowe <br/><small> w Częstochowie</small></h3>
                        </div>
                    </div>
                </section>
                <section id="nasza-szkola">
                    <div class="flex-center-1">
                        <div class="grid-3">
                            <div class="item span-2">
                                <h3>
                                    <?php echo $translate[$_SESSION['lang']]['about_school_title']; ?>
                                </h3>
                                <?php echo $translate[$_SESSION['lang']]['about_school_des']; ?>
                            </div>
                            <div class="item">
                                <h3>Techniczne Zakłady Naukowe<br/> im. gen. Władysława Sikorskiego <small>Technikum Nr 5 w Częstochowie</small></h3>
                                <hr/>
                                <p>42-217 Częstochowa ul. Jasnogórska 84/90</p>
                                <iframe width="300px" height="auto" src="https://www.youtube.com/embed/1ow8pFiU26E?rel=0&amp;showinfo=0" frameborder="0" allow="encrypted-media" allowfullscreen></iframe>
                            </div>
                            <div class="item span-3" id="map"></div>
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
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDotZmCTvSD6NKvIkRhfY9QvHhkxTDwm-8&callback=mapTzn" async defer></script>
    </body>

    </html>
