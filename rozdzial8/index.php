<?php
require("libs/Smarty.class.php");

$publisher='Wydawnictwo Helion';
$website = 'http://helion.pl';

$smarty = new Smarty;

$smarty->assign_by_ref('publisher',$publisher);
$smarty->assign('website',$website);

$smarty->display('index.tpl');

print ' <hr>
    <h3> Czeœæ, to ja - index.php. Najpierw wyœwietlê szablon index.tpl.
</h3>

    Teraz zobaczymy co siê stanie z zawartoœci¹ naszych zmiennych: <br>
    Zmienn¹ $publisher przes³ano za pomoc¹ metody <b> assign_by_ref </b>
    zmienna zawiera teraz wartoœæ <font color=red> '. $publisher .'</font><br>
    Natomiast zmienn¹ $website przes³ano za pomoc¹ metody <b> assign </b>.
    Zmienna zawiera teraz wartoœæ <font color=red> '. $website ;
?>
