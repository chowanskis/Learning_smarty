<?php
/*
 * Typ:    outputfilter
 * Nazwa:    gzip
 * Autor:    Joscha Feth, joscha@feth.com
 */
function smarty_outputfilter_gzip($tpl_source, &$smarty)
 
{
    /* wykorzystany poziom kompresji
       domy�lnie: 9
       -------------------------------------
                     0 -> 9
       gorsza kompresja -> lepsza kompresja
       mniej intensywne u�ycie procesora -> bardziej intensywne u�ycie procesora
       -------------------------------------
    */
    $compression_level = 9;

    /* wymuszenie kompresji nawet wtedy, gdy w nag��wku HTTP_ACCEPT_ENCODING nie przes�ano warto�ci gzip,
       na przyk�ad system Norton Internet Security filtruje ten nag��wek, ale 95% procent
       przegl�darek, w tym Firefox i Opera obs�uguj� kompresj� 
       .
       domy�lnie: true
    */
    $force_compression = true;

    // komunikat dodawany do �r�d�a szablonu, je�li ten jest skompresowany
    $append_message = "\n<!-- poziom kompresji zlib " . 
            $compression_level . " -->";

    // kompresja wyniku tylko wtedy, gdy:
    // - jeszcze nie przes�ano nag��wk�w
    // - jest dost�pne rozszerzenie zlib
    // -w systemie smarty jest wy��czone buforowanie
    // - przes�ano w�a�ciwy znacznik kodowania b�d� wymuszono kompresj�
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
