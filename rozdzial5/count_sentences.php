<?
//initialize smarty
include("libs/smarty.class.php");
$smarty = new smarty();
$sentences = <<< EOD
Smarty to wiod�cy mechanizm obs�ugi szablon�w dla j�zyka PHP. Jest �atwy w u�yciu i niezwykle rozbudowany. Nauczenie si� go nie sprawia trudno�ci.
EOD;

$smarty->assign("somevalue",$sentences);
$smarty->display("count_sentences.tpl");
?>
