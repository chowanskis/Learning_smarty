<?php
include_once('libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->debugging = TRUE;

$departments = array(
    'marketing' => 'Dzia� marketingu',
    'sales'     => 'Dzia� sprzeda�y',
    'support'   => 'Dzia� obs�ugi klienta'
);
$smarty->assign('departments', $departments);

$smarty->display('index.tpl');
?>
