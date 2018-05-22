<?php

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
