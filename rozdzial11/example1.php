<?php
include_once('libs/Smarty.class.php');
$smarty = new Smarty;
function highlight($output, &$smarty)
{
// pod�wietlenie s�owa "smarty" w kodzie �r�d�owym szablonu
    return str_replace('smarty', '<b>smarty</b>', $output);
}
$smarty->register_outputfilter('highlight');
$smarty->display('example1.tpl');
?>