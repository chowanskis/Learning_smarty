<?
include("libs/smarty.class.php");
$smarty = new smarty();
$sometext = <<< EOD
Modyfikator wordwrap dzieli tekst poprzez wstawienie w nim podanego parametru. Modyfikator pobiera trzy opcjonalne parametry: Pierwszy okre�la po ilu znakach ma by� wykonany podzia�: domy�lnie 80. Drugi okre�la znak wykorzystywany do podzia�u, natomiast trzeci dzia�a w taki sam spos�b, jak trzeci parametr modyfikatora truncate: okre�la, czy podzia� mo�e wyst�powa� wewn�trz s��w, czy nie.
EOD;
$smarty->assign("sometext",$sometext);
$smarty->display("word_wrap.tpl");
?>
