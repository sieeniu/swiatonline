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
    require_once('./lang/itdev.lang.php');


?>

    <!DOCTYPE HTML>
    <html lang="pl-PL" prefix="og: http://ogp.me/ns#">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Przedstawiamy Państwu krótką historię ewolucji Internetu i rozwoju sprzętu komputerowego. 
Wszystko zaczęło się stosunkowo niedawno, komputery to czas II WŚ, a Internet to lata powojenne.">
        <meta property="og:locale" content="pl_PL">
        <meta property="og:title" content="Świat Online - Rozwój IT">
        <meta property="og:description" content="Przedstawiamy Państwu krótką historię ewolucji Internetu i rozwoju sprzętu komputerowego. 
Wszystko zaczęło się stosunkowo niedawno, komputery to czas II WŚ, a Internet to lata powojenne.">
        <meta property="og:url" content="https://pawelsieniewicz.pl/rozwoj-it/">
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
                        <?php echo $translate[$_SESSION['lang']]['dev_title']; ?><span></span></h2>
                    <h4>
                        <?php echo $translate[$_SESSION['lang']]['dev_description']; ?>
                    </h4>
                    <p class="qm">
                        <?php echo $translate[$_SESSION['lang']]['dev_quotes']; ?>
                    </p>
                </div>
            </section>
            <main class="container-timeline">
                <section class="secondary">
                    <div class="columns-2 scroll">
                        <div class="col">
                            <div class="title">
                                <h3>
                                    <?php echo $translate[$_SESSION['lang']]['dev_title']; ?>
                                </h3>
                                <span class="section-line"></span>
                            </div>
                            <div class="container-tl">
                                <div class="timeline">
                                    <div class="vl">
                                        <section class="event">
                                            <h3>1939</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_hardware_1']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <h3>1941</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_hardware_2']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <h3>1943</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_hardware_3']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <h3>1945</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_hardware_4']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <h3>1960</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_hardware_5']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <h3>1967</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_hardware_6']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <h3>1970</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_hardware_7']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <h3>1979</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_hardware_8']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <h3>1981</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_hardware_9']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <h3>1982</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_hardware_10']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <h3>1984</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_hardware_11']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <h3>1985</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_hardware_12']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <h3>1995</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_hardware_13']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <h3>2001</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_hardware_14']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <h3>2009</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_hardware_15']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <h3>2012</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_hardware_16']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <h3>2014</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_hardware_17']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="title">
                                <h3>
                                    <?php echo $translate[$_SESSION['lang']]['dev_sec_networks_title']; ?>
                                </h3>
                                <span class="section-line"></span>
                            </div>
                            <div class="container-tl">
                                <div class="timeline">
                                    <div class="vl">
                                        <section class="event">
                                            <h3>1960</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_network_1']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <h3>1962</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_network_2']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <h3>1969</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_network_3']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_network_4']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <h3>1971</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_network_5']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <h3>1979</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_network_6']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <h3>1982</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_network_7']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <h3>1983</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_network_8']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <h3>1990</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_network_9']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <h3>1991</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_network_10']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <h3>1993</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_network_11']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <h3>1995</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_network_12']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <h3>1996</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_network_13']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <h3>1997</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_network_14']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <h3>1998</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_network_15']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <h3>2000</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_network_16']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        <section class="event">
                                            <h3>2004</h3>
                                            <section>

                                                <ul>
                                                    <li>
                                                        <?php echo $translate[$_SESSION['lang']]['dev_sec_network_17']; ?>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                    </div>
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
