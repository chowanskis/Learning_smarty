<?
include("libs/smarty.class.php");
$smarty = new smarty();
$words = "Smarty to wiod¹cy jêzyk obs³ugi szablonów dla programistów PHP. Jest ³atwy do wykorzystania i niezwykle uniwersalny. Mo¿na siê go szybko nauczyæ.";

$smarty->assign("somevalue",$words);
$smarty->display("count_words.tpl");?>
