<?
include("libs/smarty.class.php");
$smarty = new smarty();
$smarty->assign("sometext", "To jest jaki� d�ugi tekst do obci�cia");
$smarty->display("truncate.tpl");
?>
