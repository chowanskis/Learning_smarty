<?
include("libs/smarty.class.php");
$smarty = new smarty();
$paragraphs = <<< EOD
To jest akapit 1
To jest akapit 2
To jest akapit 3
EOD;

$smarty->assign("somevalue",$paragraphs);
$smarty->display("count_paragraphs.tpl");?>
