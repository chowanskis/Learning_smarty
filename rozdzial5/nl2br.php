<?
include("libs/smarty.class.php");
$smarty = new smarty();
$mytext = <<< EOD
To jest wiersz ze znakiem ko�ca wiersza,
ale znaki ko�ca wiersza nie s� widoczne w HTML.
Trzeba je zast�pi� znacznikiem &lt;br&gt;.
EOD;
$smarty->assign("sometext",$mytext);
$smarty->display("nl2br.tpl");
?>

