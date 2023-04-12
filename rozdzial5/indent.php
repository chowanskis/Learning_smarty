<?
include("libs/smarty.class.PHP");
$smarty = new smarty();
$smarty->assign("sometext","To jest tekst, który ma siê wyœwietliæ z wciêciem.");
$smarty->display("indent.tpl");
?>
