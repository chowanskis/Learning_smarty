<?php
include_once('libs/Smarty.class.php');
$smarty = new Smarty;
function highlight($output, &$smarty)
{
// podœwietlenie s³owa "smarty" w kodzie Ÿród³owym szablonu
    return str_replace('smarty', '<b>smarty</b>', $output);
}
$smarty->register_outputfilter('highlight');
$smarty->display('example1.tpl');
?>