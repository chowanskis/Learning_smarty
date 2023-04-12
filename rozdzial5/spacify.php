<?
include("libs/smarty.class.php");
$smarty = new smarty();
$smarty->assign("somevalue", "Leje jak z cebra.");
$smarty->display("spacify.tpl");
?>
