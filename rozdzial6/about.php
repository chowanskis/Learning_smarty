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
                'description' => 'Julian obs³uguje wszystkie sprawy zwi¹zane z  
                                  kierowaniem firm¹ takie, jak prowadzenie rozmów z
                                  potencjalnymi klientami oraz tworzenie strategii 
                                  œwiadczonych us³ug.',
            ),
        1 => array(
                'name'  => 'Ryszard Nowak',
                'title' => 'Dyrektor techniczny',
                'description' => 'Ryszard zajmuje siê wszystkimi technicznymi aspektami
                                  us³ug doradczych œwiadczonych przez firmê Smarty LLC',
            ),
        2 => array(
                'name'  => 'Adam Spychalski', // ten sprzeda ci wszystko!
                'title' => 'Kierownik sprzeda¿y',
                'description' => 'Adam jest osob¹, która dopina na ostatni guzik nasze  
                                  umowy z nowymi klientami i jest odpowiedzialny za
                                  komunikacjê z klientami wczeœniejszymi.',
            ),
    );
    $smarty->assign('team', $team);

    // lista dostêpnych jêzyków
    $languages = array(
        'pl' => 'Polski',
        'en' => 'Angielski',
        'it' => 'W³oski',
        'de' => 'Niemiecki'
    );
    $smarty->assign('languages', $languages);

    $smarty->display('about.tpl');
    ?>
