<?
include("libs/smarty.class.php");
$smarty = new smarty();
$mytext = <<< EOD
To jest wiersz ze znakiem koñca wiersza,
ale znaki koñca wiersza nie s¹ widoczne w HTML.
Trzeba je zast¹piæ znacznikiem &lt;br&gt;.
EOD;
$smarty->assign("sometext",$mytext);
$smarty->display("nl2br.tpl");
?>

