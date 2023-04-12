<?php
include_once('libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->caching = 1;

// usuniêcie z bufora wskazanego szablonu
$smarty->clear_cache('templates/example6.tpl');

$smarty->display('templates/example6.tpl');
?>
