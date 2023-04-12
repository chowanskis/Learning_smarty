<?php
include_once('libs/Smarty.class.php');
$smarty = new Smarty;

// ustawienie czasu ¿ycia dla podanego pliku w buforze
$smarty->caching = 2;

// ustawienie czasu ¿ycia na 2 godziny
$smarty->cache_lifetime = 7200;
$smarty->display('templates/example3.tpl');

// ustawienie czasu ¿ycia na 1 dzieñ
$smarty->cache_lifetime = 24 * 60 * 60;
$smarty->display('templates/daily_favorites.tpl');
?>
