<?php
include_once('libs/smarty.class.php');
$smarty = new Smarty;

function remove_html_comments($source, &$smarty)
{
    // usuniêcie komentarzy html ze Ÿród³a szablonu, nawet jeœli
   // obejmuj¹ wiele wierszy.
    return preg_replace('/<!--.*-->/Ums', '', $source);
}
$smarty->register_prefilter('remove_html_comments');
$smarty->load_filter('output', 'trimwhitespace');
$smarty->display('remove_comments.tpl');
?>
