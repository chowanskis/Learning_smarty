<?
include("libs/smarty.class.php");
$smarty = new smarty();
$words = "Smarty to wiod�cy j�zyk obs�ugi szablon�w dla programist�w PHP. Jest �atwy do wykorzystania i niezwykle uniwersalny. Mo�na si� go szybko nauczy�.";

$smarty->assign("somevalue",$words);
$smarty->display("count_words.tpl");?>
