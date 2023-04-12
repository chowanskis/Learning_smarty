<?
include("libs/smarty.class.php");
$smarty = new smarty();
$smarty->assign("email","Adres email hasin@somewherein.net");
$smarty->display("regex_replace.tpl");
?>
