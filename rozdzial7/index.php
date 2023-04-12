<?php
include_once('libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->debugging = TRUE;

$departments = array(
    'marketing' => 'Dzia³ marketingu',
    'sales'     => 'Dzia³ sprzeda¿y',
    'support'   => 'Dzia³ obs³ugi klienta'
);
$smarty->assign('departments', $departments);

$smarty->display('index.tpl');
?>
