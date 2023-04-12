<?php
include_once('include/Smarty.class.php');
$smarty = new Smarty;
$smarty->template_dir = 'templates/';
$smarty->caching = 0;
$smarty->use_sub_dirs = TRUE;

function get_content($params, $content, &$smarty)
{
    return $content;
}
$smarty->register_block('no_caching', 'get_content', false);

if (!$smarty->is_cached('example13.tpl')) {
    $smarty->assign('name', 'Joao Prado Maia');
}

// chcemy za ka¿dym razem wyœwietliæ najbardziej aktualne statystyki pobierania
$smarty->assign('download_stats', 1200);
$smarty->display('example13.tpl');
?>
