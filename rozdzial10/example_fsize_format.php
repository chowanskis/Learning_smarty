<?php
include_once('libs/Smarty.class.php');
$smarty = new Smarty;

//w rzeczywistej aplikacji, w tym miejscu nale�a�oby wywo�a� instrukcj� postaci filesize('budget.pdf')
$smarty->assign('filesize', 123456);

$smarty->display('example_fsize_format.tpl');
?>
