<?
include("libs/smarty.class.php");
$smarty = new smarty();
$smarty->assign("somevalue","bangladesz to niewielki kraj w południowej azji");
$smarty->display("capitalize.tpl");
?>
