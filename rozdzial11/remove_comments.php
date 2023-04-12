<?php
include_once('libs/smarty.class.php');
$smarty = new Smarty;

function remove_html_comments($source, &$smarty)
{
    // usuni�cie komentarzy html ze �r�d�a szablonu, nawet je�li
   // obejmuj� wiele wierszy.
    return preg_replace('/<!--.*-->/Ums', '', $source);
}
$smarty->register_prefilter('remove_html_comments');
$smarty->load_filter('output', 'trimwhitespace');
$smarty->display('remove_comments.tpl');
?>
