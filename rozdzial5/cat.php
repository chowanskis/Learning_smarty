<?
include("libs/smarty.class.php");
$smarty = new smarty();
$smarty->assign("somevalue","kupi³ wczoraj koszulê, ");
$smarty->display("cat.tpl");
?>
