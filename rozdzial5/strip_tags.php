<?
include("libs/smarty.class.php");
$smarty = new smarty();
$smarty->assign("sometext", "To jest jakiœ <b>Pogrubiony</b> tekst");
$smarty->display("strip_tags.tpl");
?>
