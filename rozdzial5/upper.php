<?
include("libs/smarty.class.php");
$smarty = new smarty();
$smarty->assign("uppertext","TO BY�O NAPISANE WIELKIMI LITERAMI");
$smarty->assign("lowertext","to by�o napisane ma�ymi literami");
$smarty->display("upper_lower.tpl");
?>
Przyk�ad dzia�ania funkcji : {$lowertext|upper}