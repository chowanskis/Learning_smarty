<?php
/*
 * Typ:    outputfilter
 * Nazwa:    gzip
 * Autor:    Joscha Feth, joscha@feth.com
 */
function smarty_outputfilter_gzip($tpl_source, &$smarty)
 
{
    /* wykorzystany poziom kompresji
       domyœlnie: 9
       -------------------------------------
                     0 -> 9
       gorsza kompresja -> lepsza kompresja
       mniej intensywne u¿ycie procesora -> bardziej intensywne u¿ycie procesora
       -------------------------------------
    */
    $compression_level = 9;

    /* wymuszenie kompresji nawet wtedy, gdy w nag³ówku HTTP_ACCEPT_ENCODING nie przes³ano wartoœci gzip,
       na przyk³ad system Norton Internet Security filtruje ten nag³ówek, ale 95% procent
       przegl¹darek, w tym Firefox i Opera obs³uguj¹ kompresjê 
       .
       domyœlnie: true
    */
    $force_compression = true;

    // komunikat dodawany do Ÿród³a szablonu, jeœli ten jest skompresowany
    $append_message = "\n<!-- poziom kompresji zlib " . 
            $compression_level . " -->";

    // kompresja wyniku tylko wtedy, gdy:
    // - jeszcze nie przes³ano nag³ówków
    // - jest dostêpne rozszerzenie zlib
    // -w systemie smarty jest wy³¹czone buforowanie
    // - przes³ano w³aœciwy znacznik kodowania b¹dŸ wymuszono kompresjê
    if ((!headers_sent()) && (extension_loaded('zlib')) && (!$smarty->caching)
            && (strstr($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')
            || $force_compression)) { 
        $tpl_source = $tpl_source . $append_message;
        $tpl_source = gzencode($tpl_source, $compression_level);
        header('Content-Encoding: gzip');
        header('Vary: Accept-Encoding');
        header('Content-Length: ' . strlen($tpl_source));
    }
    return $tpl_source;
}
?>
