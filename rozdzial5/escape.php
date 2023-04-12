<?
include("libs/smarty.class.PHP");
$smarty = new smarty();
$smarty->assign("somevalue", "To jest restauracja sieci Mc Donald’s");
$smarty->assign("somehtml","<b>To jest jakiœ pogrubiony tekst </b>");
$smarty->assign("somescript","<script>alert('hej, to jest skrypt javascript');</script>");
$smarty->display("escape.tpl");
?>
