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

// lista dostêpnych us³ug doradczych
$smarty->assign('types', array(
    'custom'   => 'Niestandardowe funkcje',
    'review'   => 'Analiza kodu',
    'database' => 'Projekt bazy danych',
));

// Lista dostêpnych sposobów p³atnoœci
$smarty->assign('payment', array(
    'pre'    => 'Abonament',
    'aswego' => 'P³atnoœæ za ka¿d¹ wizytê',
));

// lista dostêpnych jêzyków
$languages = array(
    'pl' => 'Polski',
    'en' => 'Angielski',
    'it' => 'W³oski',
    'de' => 'Niemiecki'
);
$smarty->assign('languages', $languages);

$smarty->display('request.tpl');
?>
