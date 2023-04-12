<?php
include_once('libs/Smarty.class.php');
$smarty = new smarty;

if (empty($_GET['language'])) {
    $smarty->assign('language', 'polish');
} else {
    if ($_GET['language'] == 'pl') {
        $smarty->assign( 'language', 'polish') ;
    } elseif ($_GET['language'] == 'en') {
        $smarty->assign('language', 'english');
    }
}
// lista dostêpnych jêzyków
$languages = array(
    'pl' => 'Polski',
    'en' => 'Angielski',
    'it' => 'W³oski',
    'de' => 'Niemiecki'
);
$smarty->assign('languages', $languages);

$smarty->display('index.tpl');
?>
