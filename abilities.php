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
    require_once('./lang/abilities.lang.php');


?>

    <!DOCTYPE HTML>
    <html lang="pl-PL" prefix="og: http://ogp.me/ns#">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Potencjał wykorzystania Internetu nie został jeszcze odkryty, wiele jeszcze przed nami. 
Może niektóre możliwości dziś bardzo odbiegają od rzeczywistości, ale pamiętajmy, że 
w '66 Paul Baran został wyśmiany przez swoją wizję sklepów internetowych w 2000.">
        <meta property="og:locale" content="pl_PL">
        <meta property="og:title" content="Świat Online - Zagrożenia">
        <meta property="og:description" content="Potencjał wykorzystania Internetu nie został jeszcze odkryty, wiele jeszcze przed nami. 
Może niektóre możliwości dziś bardzo odbiegają od rzeczywistości, ale pamiętajmy, że 
w '66 Paul Baran został wyśmiany przez swoją wizję sklepów internetowych w 2000.">
        <meta property="og:url" content="https://pawelsieniewicz.pl/niebezpieczenstwo/">
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
                        <?php echo $translate[$_SESSION['lang']]['abilities_title']; ?><span></span></h2>
                    <h4>
                        <?php echo $translate[$_SESSION['lang']]['abilities_description']; ?>
                    </h4>
                    <p class="qm">
                        <?php echo $translate[$_SESSION['lang']]['abilities_quote']; ?>
                    </p>
                </div>
            </section>

            <main>
                <section class="secondary" id="zycie-w-sieci">
                    <div class="title">
                        <h3>
                            <?php echo $translate[$_SESSION['lang']]['abilities_main_title']; ?>
                        </h3>
                        <div class="title-back">
                            <?php echo $translate[$_SESSION['lang']]['abilities_main_title_back']; ?>
                        </div>
                        <span class="section-line"></span>
                        <p class="desc">
                            <?php echo $translate[$_SESSION['lang']]['abilities_main_desc']; ?>
                        </p>
                    </div>
                    <div class="grid-3b2">
                        <a href="#sztuczna-inteligencja">
                            <div class="box">
                                <div class="bg ai">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['abilities_ai_title']; ?>
                                    </h4>
                                </div>
                            </div>
                        </a>
                        <a href="#kryptowaluty-i-blockchain">
                            <div class="box">
                                <div class="bg bitcoin">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['abilities_bitcoin_title']; ?>
                                    </h4>
                                </div>
                            </div>
                        </a>
                        <a href="#chmura-obliczeniowa">
                            <div class="box">
                                <div class="bg cloud">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['abilities_cloud_title']; ?>
                                    </h4>
                                </div>
                            </div>
                        </a>
                        <a href="#vr-i-ar">
                            <div class="box">
                                <div class="bg vr2">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['abilities_vr2_title']; ?>
                                    </h4>
                                </div>
                            </div>
                        </a>
                        <a href="#teleopieka">
                            <div class="box">
                                <div class="bg grandparents">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['abilities_grandparents_title']; ?>
                                    </h4>
                                </div>
                            </div>
                        </a>
                        <a href="#cinematic-vr">
                            <div class="box item">
                                <div class="bg cinematic">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['abilities_cinematicVr_title']; ?>
                                    </h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </section>
                <section id="sztuczna-inteligencja">
                    <div class="big-box">
                        <div class="parallax flex-prlx bg-big ai">
                            <h3>
                                <?php echo $translate[$_SESSION['lang']]['abilities_ai_title']; ?>
                            </h3>
                        </div>
                    </div>
                    <div class="title">
                        <span class="section-line"></span>
                        <div class="flex-center-70">
                            <div class="grid-2">
                                <div class="col">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['abilities_ai_subtitle1']; ?>
                                    </h4>
                                    <p class="desc">
                                        <?php echo $translate[$_SESSION['lang']]['abilities_ai_desc1']; ?>
                                    </p>
                                </div>
                                <div class="col-right">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['abilities_ai_subtitle2']; ?>
                                    </h4>
                                    <p class="desc">
                                        <?php echo $translate[$_SESSION['lang']]['abilities_ai_desc2']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="kryptowaluty-i-blockchain">
                    <div class="big-box">
                        <div class="parallax flex-prlx bg-big  bitcoin">
                            <h3>
                                <?php echo $translate[$_SESSION['lang']]['abilities_bitcoin_title']; ?>
                            </h3>
                        </div>
                    </div>
                    <div class="title">
                        <span class="section-line"></span>
                        <div class="flex-center-1 flex-70">
                            <div class="grid-1">
                                <div class="col">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['abilities_bitcoin_subtitle']; ?>
                                    </h4>
                                    <p class="desc">
                                        <?php echo $translate[$_SESSION['lang']]['abilities_bitcoin_desc']; ?><br/>
                                        <a href="https://www.lazarski.pl/pl/wydzialy-i-jednostki/instytuty/wydzial-ekonomii-i-zarzadzania/centrum-technologii-blockchain/wykorzystanie-blockchain-przez-rzad-estonski/">
                                            <?php echo $translate[$_SESSION['lang']]['abilities_bitcoin_hyperlink']; ?>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="chmura-obliczeniowa">
                    <div class="big-box">
                        <div class="parallax flex-prlx bg-big cloud">
                            <h3>
                                <?php echo $translate[$_SESSION['lang']]['abilities_cloud_title']; ?>
                            </h3>
                        </div>
                    </div>
                    <div class="title">
                        <span class="section-line"></span>
                        <div class="flex-center-1 flex-70">
                            <div class="grid-1">
                                <div class="col">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['abilities_cloud_subtitle']; ?>
                                    </h4>
                                    <p class="desc">
                                        <?php echo $translate[$_SESSION['lang']]['abilities_cloud_desc']; ?><br/>
                                        <a href="http://www.nvidia.pl/object/nvidia-grid-cloud-gaming-pl.html">
                                            <?php echo $translate[$_SESSION['lang']]['abilities_cloud_hyperlink']; ?>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="vr-i-ar">
                    <div class="big-box">
                        <div class="parallax flex-prlx bg-big vr2">
                            <h3>VR i AR</h3>
                        </div>
                    </div>
                    <div class="title">
                        <span class="section-line"></span>
                        <div class="flex-center-1 flex-70">
                            <div class="grid-1">
                                <div class="col">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['abilities_vr2_subtitle']; ?>
                                    </h4>
                                    <p class="desc">
                                        <?php echo $translate[$_SESSION['lang']]['abilities_vr2_desc']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="teleopieka">
                    <div class="big-box">
                        <div class="parallax flex-prlx bg-big teleopieka">
                            <h3>
                                <?php echo $translate[$_SESSION['lang']]['abilities_grandparents_title']; ?>
                            </h3>
                        </div>
                    </div>
                    <div class="title">
                        <span class="section-line"></span>
                        <div class="flex-center-1 flex-70">
                            <div class="grid-1">
                                <div class="col">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['abilities_grandparents_subtitle']; ?>
                                    </h4>
                                    <p class="desc">
                                        <?php echo $translate[$_SESSION['lang']]['abilities_grandparents_desc']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="cinematic-vr">
                    <div class="big-box">
                        <div class="parallax flex-prlx bg-big cinematic">
                            <h3>Cinematic VR</h3>
                        </div>
                    </div>
                    <div class="title">
                        <span class="section-line"></span>
                        <div class="flex-center-1 flex-70">
                            <div class="grid-1">
                                <div class="col">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['abilities_cinematicVr_subtitle']; ?>
                                    </h4>
                                    <p class="desc">
                                        <?php echo $translate[$_SESSION['lang']]['abilities_cinematicVr_desc']; ?><br/>
                                        <a href="https://www.vrhunters.pl/kinematografia-360-vr-rosnie-w-sile-cz-1/">
                                            <?php echo $translate[$_SESSION['lang']]['abilities_cinematicVr_hyperlink']; ?>
                                        </a>
                                    </p>
                                </div>
                            </div>
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
