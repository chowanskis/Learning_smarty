<?php
include_once('libs/Smarty.class.php');
$smarty = new Smarty;
$departments = array(
    'Dzia³ marketingu',
    'Dzia³ sprzeda¿y',
    'Dzia³ obs³ugi klienta'
);
$smarty->assign('departments', $departments);
$smarty->display('example_html_list.tpl');
?>
