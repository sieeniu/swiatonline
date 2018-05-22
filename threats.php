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
    require_once('./lang/threats.lang.php');


?>


    <!DOCTYPE HTML>
    <html lang="pl-PL">

    <head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Internet mimo swoich pozytywów, posiada również kilka negatywnych aspektów. 
Czasami może być miejscem przestępstw, w tym środowisku mogą się przenosić różne wirusy komputerowe.">
        <meta property="og:locale" content="pl_PL">
        <meta property="og:title" content="Świat Online - Zagrożenia">
        <meta property="og:description" content="Internet mimo swoich pozytywów, posiada również kilka negatywnych aspektów. 
Czasami może być miejscem przestępstw, w tym środowisku mogą się przenosić różne wirusy komputerowe.">
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
                        <?php echo $translate[$_SESSION['lang']]['threats_title']; ?><span></span></h2>
                    <h4>
                        <?php echo $translate[$_SESSION['lang']]['threats_description']; ?>
                    </h4>
                    <p class="qm">"Większość technologii ma świetlisty awers, ale życie dało im rewers – czarną rzeczywistość." ~ Stanisław Lem</p>
                </div>
            </section>

            <main>
                <section class="secondary" id="zycie-w-sieci">
                    <div class="title">
                        <h3>
                            <?php echo $translate[$_SESSION['lang']]['threats_main_title']; ?>
                        </h3>
                        <div class="title-back">
                            <?php echo $translate[$_SESSION['lang']]['threats_main_title_back']; ?>
                        </div>
                        <span class="section-line"></span>
                        <p>
                            <?php echo $translate[$_SESSION['lang']]['threats_main_desc']; ?>
                        </p>
                    </div>
                    <div class="grid-3b2">
                        <a href="#naruszenie-prywatnosci">
                            <div class="box">
                                <div class="bg privacy">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['violationofprivacy_main_title']; ?>
                                    </h4>
                                </div>
                            </div>
                        </a>
                        <a href="#stalking">
                            <div class="box">
                                <div class="bg stalking">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['stalking_main_title']; ?>
                                    </h4>
                                </div>
                            </div>
                        </a>
                        <a href="#nieodpowiednie-tresci">
                            <div class="box">
                                <div class="bg inapp">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['inappropriateContent_main_title']; ?>
                                    </h4>
                                </div>
                            </div>
                        </a>
                        <a href="#uzaleznienia">
                            <div class="box">
                                <div class="bg addiction">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['addiction_main_title']; ?>
                                    </h4>
                                </div>
                            </div>
                        </a>
                        <a href="#darknet">
                            <div class="box">
                                <div class="bg darknet">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['DarkNet_main_title']; ?>
                                    </h4>
                                </div>
                            </div>
                        </a>
                        <a href="#kwestia-bezpieczenstwa-danych-w-sieci">
                            <div class="box">
                                <div class="bg security">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['DataSec_main_title']; ?>
                                    </h4>
                                </div>
                            </div>
                        </a>
                        <a href="#openwifi">
                            <div class="box">
                                <div class="bg openwifi">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['openWifi_main_title']; ?>
                                    </h4>
                                </div>
                            </div>
                        </a>
                        <a href="#destab">
                            <div class="box">
                                <div class="bg destab">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['serviceDestab_main_title']; ?>
                                    </h4>
                                </div>
                            </div>
                        </a>
                        <a href="#virus">
                            <div class="box">
                                <div class="bg virus">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['computerVirus_main_title']; ?>
                                    </h4>
                                </div>
                            </div>
                        </a>
                        <a href="#spam">
                            <div class="box">
                                <div class="bg spam">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['spam_main_title']; ?>
                                    </h4>
                                </div>
                            </div>
                        </a>
                        <a href="#fakenews">
                            <div class="box">
                                <div class="bg fakenews">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['fakeNews_main_title']; ?>
                                    </h4>
                                </div>
                            </div>
                        </a>
                        <a href="#dataEnc">
                            <div class="box">
                                <div class="bg encryption">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['dataEncrypt_main_title']; ?>
                                    </h4>
                                </div>
                            </div>
                        </a>
                        <a href="#socailEng">
                            <div class="box">
                                <div class="bg soceng">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['socialEng_main_title']; ?>
                                    </h4>
                                </div>
                            </div>
                        </a>
                        <a href="#softGaps">
                            <div class="box">
                                <div class="bg gap">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['softGaps_main_title']; ?>
                                    </h4>
                                </div>
                            </div>
                        </a>
                        <a href="#beliefSafety">
                            <div class="box">
                                <div class="bg firefighter">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['deceiving_main_title']; ?>
                                    </h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </section>
                <section id="naruszenie-prywatnosci">
                    <div class="big-box">
                        <div class="parallax flex-prlx bg-big  privacy">
                            <h3>
                                <?php echo $translate[$_SESSION['lang']]['violationofprivacy_main_title']; ?>
                            </h3>
                        </div>
                    </div>
                    <div class="title">
                        <span class="section-line"></span>
                        <div class="flex-center-1 flex-70">
                            <div class="grid-1">
                                <div class="col">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['violationofprivacy_subtitle']; ?>
                                    </h4>
                                    <p>
                                        <?php echo $translate[$_SESSION['lang']]['violationofprivacy_desc']; ?>
                                        <br/><a href="https://www.eska.pl/hotplota/news/ten-nastolatek-zostal-zabity-za-to-co-wrzucal-do-internetu-lepiej-uwazajcie-aa-vg8e-9cj2-7Cyj.html" title="Śmierć nastolatka" target="_blank"><?php echo $translate[$_SESSION['lang']]['violationofprivacy_hyperlink1']; ?></a>
                                <br/><a href="https://wiadomosci.onet.pl/tylko-w-onecie/co-moze-wyniknac-z-niewinnego-zdjecia-na-facebooku/6lflq" title="Niewinne zdjęcie na FB" target="_blank"><?php echo $translate[$_SESSION['lang']]['violationofprivacy_hyperlink2']; ?></a>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="stalking">
                    <div class="big-box">
                        <div class="parallax flex-prlx bg-big stalking">
                            <h3>
                                <?php echo $translate[$_SESSION['lang']]['stalking_main_title']; ?>
                            </h3>
                        </div>
                    </div>
                    <div class="title">
                        <span class="section-line"></span>
                        <div class="flex-center-1 flex-70">
                            <div class="grid-1">
                                <div class="col">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['stalking_subtitle']; ?>
                                    </h4>
                                    <p>
                                        <?php echo $translate[$_SESSION['lang']]['stalking_desc']; ?>
                                        <br/><a href="https://portal.abczdrowie.pl/stalking" title="Więcej o stalkingu" target="_blank"><?php echo $translate[$_SESSION['lang']]['stalking_hyperlink']; ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="nieodpowiednie-tresci">
                    <div class="big-box">
                        <div class="parallax flex-prlx bg-big inapp">
                            <h3>
                                <?php echo $translate[$_SESSION['lang']]['inappropriateContent_main_title']; ?>
                            </h3>
                        </div>
                    </div>
                    <div class="title">
                        <span class="section-line"></span>
                        <div class="flex-center-1 flex-70">
                            <div class="grid-1">
                                <div class="col">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['inappropriateContent_subtitle']; ?>
                                    </h4>
                                    <p>
                                        <?php echo $translate[$_SESSION['lang']]['inappropriateContent_desc']; ?>
                                        <a href="https://tech.wp.pl/pedofilia-i-inne-nieodpowiednie-tresci-w-internecie-mozesz-pomoc-reaguj-zglos-6039962972378241a" title="Nieodpowiednie treści w internecie" target="_blank"><?php echo $translate[$_SESSION['lang']]['inappropriateContent_hyperlink']; ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="uzaleznienia">
                    <div class="big-box">
                        <div class="parallax flex-prlx bg-big  addiction">
                            <h3>
                                <?php echo $translate[$_SESSION['lang']]['addiction_main_title']; ?>
                            </h3>
                        </div>
                    </div>
                    <div class="title">
                        <span class="section-line"></span>
                        <div class="flex-center-1 flex-70">
                            <div class="grid-1">
                                <div class="col">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['addiction_subtitle']; ?>
                                    </h4>
                                    <p>
                                        <?php echo $translate[$_SESSION['lang']]['addiction_desc']; ?>
                                        <br/><a href="http://www.psychiatria.pl/artykul/uzaleznienie-od-internetu/597" title="Więcej o uzaleznieniach" target="_blank"><?php echo $translate[$_SESSION['lang']]['addiction_hyperlink']; ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="darknet">
                    <div class="big-box">
                        <div class="parallax flex-prlx bg-big darknet">
                            <h3>
                                <?php echo $translate[$_SESSION['lang']]['DarkNet_main_title']; ?>
                            </h3>
                        </div>
                    </div>
                    <div class="title">
                        <span class="section-line"></span>
                        <div class="flex-center-1 flex-70">
                            <div class="grid-1">
                                <div class="col">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['DarkNet_subtitle']; ?>
                                    </h4>
                                    <p class="desc">
                                        <?php echo $translate[$_SESSION['lang']]['DarkNet_desc']; ?>
                                        <br/><a href="http://www.komputerswiat.pl/artykuly/redakcyjne/2016/10/darknet-ciemna-strona-internetu.aspx" title="Ciekawy artykuł o DarkNet" target="_blank"><?php echo $translate[$_SESSION['lang']]['DarkNet_hyperlink']; ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="kwestia-bezpieczenstwa-danych-w-sieci">
                    <div class="big-box">
                        <div class="parallax flex-prlx bg-big security">
                            <h3>
                                <?php echo $translate[$_SESSION['lang']]['DataSec_main_title']; ?>
                            </h3>
                        </div>
                    </div>
                    <div class="title">
                        <span class="section-line"></span>
                        <div class="flex-center-1 flex-70">
                            <div class="grid-1">
                                <div class="col">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['DataSec_subtitle']; ?>
                                    </h4>
                                    <p>
                                        <?php echo $translate[$_SESSION['lang']]['DataSec_desc']; ?>
                                        <br/><a href="https://www.spidersweb.pl/2014/12/sony-wyciek.html" title="Atak hakerski na Sony" target="_blank"><?php echo $translate[$_SESSION['lang']]['DataSec_hyperlink']; ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="openwifi">
                    <div class="big-box">
                        <div class="parallax flex-prlx bg-big openwifi">
                            <h3>
                                <?php echo $translate[$_SESSION['lang']]['openWifi_main_title']; ?>
                            </h3>
                        </div>
                    </div>
                    <div class="title">
                        <span class="section-line"></span>
                        <div class="flex-center-1 flex-70">
                            <div class="grid-1">
                                <div class="col">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['openWifi_subtitle']; ?>
                                    </h4>
                                    <p>
                                        <?php echo $translate[$_SESSION['lang']]['openWifi_desc']; ?>
                                        <br/><a href="https://imagazine.pl/2013/07/02/jakie-zagrozenia-niesie-za-soba-korzystanie-z-niezabezpieczonej-sieci-wi-fi/" title="" target="_blank"><?php echo $translate[$_SESSION['lang']]['openWifi_hyperlink1']; ?></a>
                                        <br/><a href="https://protesterzy.pl/2016/06/jak-dziala-pineapple-czyli-honeypot-idealny/" title="" target="_blank"><?php echo $translate[$_SESSION['lang']]['openWifi_hyperlink2']; ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="destab">
                    <div class="big-box">
                        <div class="parallax flex-prlx bg-big destab">
                            <h3>
                                <?php echo $translate[$_SESSION['lang']]['serviceDestab_main_title']; ?>
                            </h3>
                        </div>
                    </div>
                    <div class="title">
                        <span class="section-line"></span>
                        <div class="flex-center-1 flex-70">
                            <div class="grid-1">
                                <div class="col">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['serviceDestab_subtitle']; ?>
                                    </h4>
                                    <p>
                                        <?php echo $translate[$_SESSION['lang']]['serviceDestab_desc']; ?>
                                        <br/><a href="https://wpolityce.pl/spoleczenstwo/256805-atak-hakerow-na-lot-wielki-chaos-na-lotnisku-okecie " title="Awaria na Okęciu" target="_blank"><?php echo $translate[$_SESSION['lang']]['serviceDestab_hyperlink1']; ?></a>
                                        <br/><a href="https://www.bankier.pl/wiadomosc/Zmasowane-ataki-hakerskie-w-calej-Europie-i-USA-3711272.html " title="Liczne ataki hakerskie" target="_blank"><?php echo $translate[$_SESSION['lang']]['serviceDestab_hyperlink2']; ?></a>
                                        <br/><a href="http://www.dzienniklodzki.pl/motofakty/a/cepik-nie-dziala-duzy-klopot-z-rejestracja-samochodow-awaria-cepik-20,12675691/" title="Awaria systemu Cepik" target="_blank"><?php echo $translate[$_SESSION['lang']]['serviceDestab_hyperlink3']; ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="virus">
                    <div class="big-box">
                        <div class="parallax flex-prlx bg-big virus">
                            <h3>
                                <?php echo $translate[$_SESSION['lang']]['computerVirus_main_title']; ?>
                            </h3>
                        </div>
                    </div>
                    <div class="title">
                        <span class="section-line"></span>
                        <div class="flex-center-1 flex-70">
                            <div class="grid-1">
                                <div class="col">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['computerVirus_subtitle']; ?>
                                    </h4>
                                    <p>
                                        <?php echo $translate[$_SESSION['lang']]['computerVirus_desc']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="spam">
                    <div class="big-box">
                        <div class="parallax flex-prlx bg-big spam">
                            <h3>
                                <?php echo $translate[$_SESSION['lang']]['spam_main_title']; ?>
                            </h3>
                        </div>
                    </div>
                    <div class="title">
                        <span class="section-line"></span>
                        <div class="flex-center-1 flex-70">
                            <div class="grid-1">
                                <div class="col">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['spam_subtitle']; ?>
                                    </h4>
                                    <p>
                                        <?php echo $translate[$_SESSION['lang']]['spam_desc']; ?>
                                        <br/><a href="http://www.komputerswiat.pl/artykuly/redakcyjne/2014/12/spam-to-nie-tylko-bezwartosciowe-tresci-moze-byc-bardzo-niebezpieczny.aspx" title="Więcej o tym czym jest spam" target="_blank"></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="fakenews">
                    <div class="big-box">
                        <div class="parallax flex-prlx bg-big fakenews">
                            <h3>
                                <?php echo $translate[$_SESSION['lang']]['fakeNews_main_title']; ?>
                            </h3>
                        </div>
                    </div>
                    <div class="title">
                        <span class="section-line"></span>
                        <div class="flex-center-1 flex-70">
                            <div class="grid-2">
                                <div class="col">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['fakeNews_subtitle1']; ?>
                                    </h4>
                                    <p>
                                        <?php echo $translate[$_SESSION['lang']]['fakeNews_desc1']; ?>
                                        <br/><a href="http://www.wirtualnemedia.pl/artykul/nowe-centrum-rzadowe-w-czechach-bedzie-walczyc-z-dezinformacja-w-internecie# " title="Nowe centrum rządowe w Czechach" target="_blank"><?php echo $translate[$_SESSION['lang']]['fakeNews_hyperlink11']; ?></a>
                                        <br/><a href="http://www.wirtualnemedia.pl/artykul/falszywych-informacji-w-internecie-bedzie-przybywac-oplacaja-sie-autorom-rozprzestrzeniaja-sie-w-social-media " title="Fałszywe informacje" target="_blank"><?php echo $translate[$_SESSION['lang']]['fakeNews_hyperlink12']; ?></a>
                                        <br/><a href="http://superbiz.se.pl/wiadomosci-biz/fake-newsy-nie-tylko-falszywe-informacje-ale-i-biznes_1015939.html" title="Fałszywe informacje jako biznes" target="_blank"><?php echo $translate[$_SESSION['lang']]['fakeNews_hyperlink13']; ?></a>
                                    </p>
                                </div>
                                <div class="col-2">
                                    <h4>
                                        <?php echo $translate[$_SESSION['lang']]['fakeNews_subtitle2']; ?>
                                    </h4>
                                    <p>
                                        <?php echo $translate[$_SESSION['lang']]['fakeNews_desc2']; ?>
                                        <br/><a href="https://www.ingbank.pl/_fileserver/item/1004046" title="Informacja od ING" target="_blank"><?php echo $translate[$_SESSION['lang']]['fakeNews_hyperlink21']; ?></a>
                                        <br/><a href="https://poradnikprzedsiebiorcy.pl/-wyludzanie-danych-osobowych-zagrozenia" title="Wyłudzanie danych" target="_blank"><?php echo $translate[$_SESSION['lang']]['fakeNews_hyperlink22']; ?></a>
                                        <br/><a href="https://kontakt24.tvn24.pl/to-proba-wyludzenia-danych-oszusci-znow-atakuja-klientow-banku,157682.html" title="Atak na klientów banku" target="_blank"><?php echo $translate[$_SESSION['lang']]['fakeNews_hyperlink23']; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="dataEnc">
                    <div class="big-box">
                        <div class="parallax flex-prlx bg-big encryption">
                            <h3><?php echo $translate[$_SESSION['lang']]['dataEncrypt_main_title']; ?></h3>
                        </div>
                    </div>
                    <div class="title">
                        <span class="section-line"></span>
                        <div class="flex-center-1 flex-70">
                            <div class="grid-1">
                                <div class="col">
                                    <h4><?php echo $translate[$_SESSION['lang']]['dataEncrypt_subtitle']; ?></h4>
                                    <p><?php echo $translate[$_SESSION['lang']]['dataEncrypt_desc']; ?>
                                    <br/><a href="http://www.dziennikwschodni.pl/lublin/jedno-klikniecie-i-tracimy-wszystko-wirus-crypt0l0cker-szyfruje-dane-zeby-je-odzyskac-trzeba-zaplacic,n,1000182092.html" title="Wirusy szyfrujące dane" target="_blank"><?php echo $translate[$_SESSION['lang']]['dataEncrypt_hyperlink']; ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="socailEng">
                    <div class="big-box">
                        <div class="parallax flex-prlx bg-big soceng">
                            <h3><p class="desc"><?php echo $translate[$_SESSION['lang']]['socialEng_main_title']; ?></h3>
                        </div>
                    </div>
                    <div class="title">
                        <span class="section-line"></span>
                        <div class="flex-center-1 flex-70">
                            <div class="grid-1">
                                <div class="col">
                                    <h4><p class="desc"><?php echo $translate[$_SESSION['lang']]['socialEng_subtitle']; ?></h4>
                                    <p><p class="desc"><?php echo $translate[$_SESSION['lang']]['socialEng_desc']; ?>
                                    <br/><a href="http://mit.weii.tu.koszalin.pl/MIT7/Modele%20inzynierii%20teleinformatyki%207_16%20Pacewicz.pdf" target="_blank"><?php echo $translate[$_SESSION['lang']]['socialEng_hyperlink1']; ?></a>
                                    <br/><a href="http://security.itwiz.pl/ataki-socjotechniczne-wciaz-aktualnym-zagrozeniem/ " title="O socjotechnice" target="_blank"><?php echo $translate[$_SESSION['lang']]['socialEng_hyperlink2']; ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="softGaps">
                    <div class="big-box">
                        <div class="parallax flex-prlx bg-big cinematic">
                            <h3><?php echo $translate[$_SESSION['lang']]['softGaps_main_title']; ?></h3>
                        </div>
                    </div>
                    <div class="title">
                        <span class="section-line"></span>
                        <div class="flex-center-1 flex-70">
                            <div class="grid-1">
                                <div class="col">
                                    <h4><?php echo $translate[$_SESSION['lang']]['softGaps_subtitle']; ?></h4>
                                    <p><?php echo $translate[$_SESSION['lang']]['softGaps_desc']; ?>
                                    <br/><a href="https://tech.wp.pl/microsoft-naprawi-krytyczne-luki-w-windows-6034847952974465a" title="Luki w Windows" target="_blank"><?php echo $translate[$_SESSION['lang']]['softGaps_hyperlink1'];?></a>
                                    <br/><a href="https://dailyweb.pl/meltdown-i-spectre-wszystko-co-powinienes-wiedziec-o-zagrozeniu/" title="Meltdown i Spectre" target="_blank"><?php echo $translate[$_SESSION['lang']]['softGaps_hyperlink2'];?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="beliefSafety">
                    <div class="big-box">
                        <div class="parallax flex-prlx bg-big firefighter">
                            <h3><?php echo $translate[$_SESSION['lang']]['deceiving_main_title']; ?></h3>
                        </div>
                    </div>
                    <div class="title">
                        <span class="section-line"></span>
                        <div class="flex-center-1 flex-70">
                            <div class="grid-1">
                                <div class="col">
                                    <h4><?php echo $translate[$_SESSION['lang']]['deceiving_subtitle']; ?></h4>
                                    <p><?php echo $translate[$_SESSION['lang']]['deceiving_desc1']; ?>
                                    <br/><a href="http://innpoland.pl/126311,w-twoim-telefonie-jest-wiecej-informacji-o-tobie-niz-w-twoim-domu-co-tak-naprawde-wiedza-o-nas-nasze-komorki " title="Co jest w naszych telefonach" target="_blank"><?php echo $translate[$_SESSION['lang']]['deceiving_hyperlink1']; ?></a>
                                    </p>                   
                                    <p><?php echo $translate[$_SESSION['lang']]['deceiving_desc2']; ?>
                                        <br/><a href="https://wpolityce.pl/spoleczenstwo/256805-atak-hakerow-na-lot-wielki-chaos-na-lotnisku-okecie " title="Poważna awaria na Okęciu" target="_blank"><?php echo $translate[$_SESSION['lang']]['deceiving_hyperlink2']; ?></a>
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
