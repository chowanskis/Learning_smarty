<?
include("libs/smarty.class.php");
$smarty = new smarty();
$smarty->assign("somevalue","kupi� wczoraj koszul�, ");
$smarty->display("cat.tpl");
?>
