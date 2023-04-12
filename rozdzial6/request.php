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

// lista dost�pnych us�ug doradczych
$smarty->assign('types', array(
    'custom'   => 'Niestandardowe funkcje',
    'review'   => 'Analiza kodu',
    'database' => 'Projekt bazy danych',
));

// Lista dost�pnych sposob�w p�atno�ci
$smarty->assign('payment', array(
    'pre'    => 'Abonament',
    'aswego' => 'P�atno�� za ka�d� wizyt�',
));

// lista dost�pnych j�zyk�w
$languages = array(
    'pl' => 'Polski',
    'en' => 'Angielski',
    'it' => 'W�oski',
    'de' => 'Niemiecki'
);
$smarty->assign('languages', $languages);

$smarty->display('request.tpl');
?>
