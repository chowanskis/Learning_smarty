<?php
include_once('libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->template_dir = 'templates/';
$smarty->caching = 1;
$smarty->use_sub_dirs = TRUE;

// utrata wa¿noœci za godzinê
$expiration_secs = 1 * 60 * 60;
$smarty->clear_cache(null, 'news', null, $expiration_secs);
?>
