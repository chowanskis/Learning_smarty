<?php
include("libs/smarty.class.php");
$smarty = new smarty();
$sample_name = "Janusz Adamski";
$smarty->assign("name", $sample_name);
$smarty->assign("greetings", "Dzie� dobry");
$smarty->display("sample.tpl");
?>
