<?
//initialize smarty
include("libs/smarty.class.php");
$smarty = new smarty();
$sentences = <<< EOD
Smarty to wiod¹cy mechanizm obs³ugi szablonów dla jêzyka PHP. Jest ³atwy w u¿yciu i niezwykle rozbudowany. Nauczenie siê go nie sprawia trudnoœci.
EOD;

$smarty->assign("somevalue",$sentences);
$smarty->display("count_sentences.tpl");
?>
