<?
include("libs/smarty.class.PHP");
$smarty = new smarty();
$smarty->assign("sometext","To jest tekst, kt�ry ma si� wy�wietli� z wci�ciem.");
$smarty->display("indent.tpl");
?>
