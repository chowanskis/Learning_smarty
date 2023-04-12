<?
include("libs/smarty.class.php");
$smarty = new smarty();
$smarty->assign("sometext", "To jest jakiœ d³ugi tekst do obciêcia");
$smarty->display("truncate.tpl");
?>
