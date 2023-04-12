<?php
    include_once('libs/Smarty.class.php');
    $smarty = new Smarty;

    if (empty($_GET['language'])) {
        $smarty->assign('language', 'polish');
    } else {
 
        if ($_GET['language'] == 'pl') {
            $smarty->assign('language', 'polish');
        } elseif ($_GET['language'] == 'en') {
            $smarty->assign('language', 'english');
        }
    }

    $team = array(
        0 => array(
                'name'  => 'Julian Lis', // cwany jak lis!
                'title' => 'Dyrektor naczelny',
                'description' => 'Julian obs�uguje wszystkie sprawy zwi�zane z  
                                  kierowaniem firm� takie, jak prowadzenie rozm�w z
                                  potencjalnymi klientami oraz tworzenie strategii 
                                  �wiadczonych us�ug.',
            ),
        1 => array(
                'name'  => 'Ryszard Nowak',
                'title' => 'Dyrektor techniczny',
                'description' => 'Ryszard zajmuje si� wszystkimi technicznymi aspektami
                                  us�ug doradczych �wiadczonych przez firm� Smarty LLC',
            ),
        2 => array(
                'name'  => 'Adam Spychalski', // ten sprzeda ci wszystko!
                'title' => 'Kierownik sprzeda�y',
                'description' => 'Adam jest osob�, kt�ra dopina na ostatni guzik nasze  
                                  umowy z nowymi klientami i jest odpowiedzialny za
                                  komunikacj� z klientami wcze�niejszymi.',
            ),
    );
    $smarty->assign('team', $team);

    // lista dost�pnych j�zyk�w
    $languages = array(
        'pl' => 'Polski',
        'en' => 'Angielski',
        'it' => 'W�oski',
        'de' => 'Niemiecki'
    );
    $smarty->assign('languages', $languages);

    $smarty->display('about.tpl');
    ?>
