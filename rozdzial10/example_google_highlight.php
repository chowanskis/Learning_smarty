<?php
include_once('libs/Smarty.class.php');
$smarty = new Smarty;

$results = array(
    'Zesp� zarz�dzaj�cy',
    'Obs�uga klienta',
    'Profesjonalne us�ugi'
);
$search_keywords = 'profesjonalne us�ugi zesp�';
$smarty->assign(array(
    'search_results' => $results,
    'keywords'       => $search_keywords
));

$smarty->display('example_google_highlight.tpl');
?>
