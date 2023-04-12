<?
include("libs/smarty.class.php");
$smarty = new smarty();
$sometext = <<< EOD
Modyfikator wordwrap dzieli tekst poprzez wstawienie w nim podanego parametru. Modyfikator pobiera trzy opcjonalne parametry: Pierwszy okreœla po ilu znakach ma byæ wykonany podzia³: domyœlnie 80. Drugi okreœla znak wykorzystywany do podzia³u, natomiast trzeci dzia³a w taki sam sposób, jak trzeci parametr modyfikatora truncate: okreœla, czy podzia³ mo¿e wystêpowaæ wewn¹trz s³ów, czy nie.
EOD;
$smarty->assign("sometext",$sometext);
$smarty->display("word_wrap.tpl");
?>
