<?php
include_once('libs/Smarty.class.php');
$smarty = new Smarty;

$results = array(
    'Zespó³ zarz¹dzaj¹cy',
    'Obs³uga klienta',
    'Profesjonalne us³ugi'
);
$search_keywords = 'profesjonalne us³ugi zespó³';
$smarty->assign(array(
    'search_results' => $results,
    'keywords'       => $search_keywords
));

$smarty->display('example_google_highlight.tpl');
?>
