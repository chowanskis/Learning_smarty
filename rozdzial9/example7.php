<?php
include_once('libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->caching = 1;

// ca³kowite wyzerowanie bufora Smarty
$smarty->clear_all_cache();

$smarty->display('templates/example7.tpl');
?>
