<?php
require("libs/Smarty.class.php");

$publisher='Wydawnictwo Helion';
$website = 'http://helion.pl';

$smarty = new Smarty;

$smarty->assign_by_ref('publisher',$publisher);
$smarty->assign('website',$website);

$smarty->display('index.tpl');

print ' <hr>
    <h3> Cze��, to ja - index.php. Najpierw wy�wietl� szablon index.tpl.
</h3>

    Teraz zobaczymy co si� stanie z zawarto�ci� naszych zmiennych: <br>
    Zmienn� $publisher przes�ano za pomoc� metody <b> assign_by_ref </b>
    zmienna zawiera teraz warto�� <font color=red> '. $publisher .'</font><br>
    Natomiast zmienn� $website przes�ano za pomoc� metody <b> assign </b>.
    Zmienna zawiera teraz warto�� <font color=red> '. $website ;
?>
