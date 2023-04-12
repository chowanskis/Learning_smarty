<?
include("libs/smarty.class.php");
$smarty = new smarty();
$smarty->assign("uppertext","TO BY£O NAPISANE WIELKIMI LITERAMI");
$smarty->assign("lowertext","to by³o napisane ma³ymi literami");
$smarty->display("upper_lower.tpl");
?>
Przyk³ad dzia³ania funkcji : {$lowertext|upper}