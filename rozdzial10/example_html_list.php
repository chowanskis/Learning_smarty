<?php
include_once('libs/Smarty.class.php');
$smarty = new Smarty;
$departments = array(
    'Dzia� marketingu',
    'Dzia� sprzeda�y',
    'Dzia� obs�ugi klienta'
);
$smarty->assign('departments', $departments);
$smarty->display('example_html_list.tpl');
?>
