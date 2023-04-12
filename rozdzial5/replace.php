<?
include("libs/smarty.class.php");
$smarty = new smarty();
$smarty->assign("somevalue", "Leje jak z wiadra.");
$smarty->display("replace.tpl");
?>
