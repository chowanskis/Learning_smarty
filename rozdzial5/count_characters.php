<?
include("libs/smarty.class.php");
$smarty = new smarty();
$smarty->assign("somevalue","bangladesz to niewielki kraj w po�udniowej azji");
$smarty->display("count_characters.tpl");
?>
