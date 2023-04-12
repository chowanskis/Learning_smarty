<?php
/*
 *Wtyczka Smarty
 *
 * Plik:     outputfilter.search_highlight.php
 * Typ:     filtr wynikowy
 * Nazwa:     search_highlight
 * Przeznaczenie:  Automatycznie pod�wietla s�owa kluczowe u�yte do wyszukiwania w przypadku, gdy
 *            u�ytkownik jest przekierowany do naszej witryny za po�rednictwem Google.
 * Instalacja:  Skopiowanie do katalogu plugin, a nast�pnie u�ycie funkcji load_filter() w celu r�cznego
 *            za�adowania wtyczki do systemu Smarty lub ustawienie zmiennej $autoload_filters
 *            
 */
require_once $smarty->_get_plugin_filepath('modifier', 'google_highlight');

function smarty_outputfilter_search_highlight($tpl_output, &$smarty)
 
{
    // sprawdzenie zawarto�ci nag��wka HTTP_REFERER
    $referrer = getenv('HTTP_REFERER');
    if (!empty($referrer)) {
        $pieces = parse_url($referrer);
        // pod�wietlenie s��w kluczowych u�ytych do wyszukiwania tylko wtedy, gdy 
        // u�ytkownik dotar� do witryny z serwisu google.com
        if (stristr($pieces['host'], 'google.com')) {
            $params = explode('&', $pieces['query']);
            $query = array();
            foreach ($params as $param) {
                list($key, $value) = explode('=', $param);
                $query[$key] = urldecode($value);
            }
            // wykonywanie operacji tylko wtedy, gdy s� dost�pne 
            // s�owa kluczowe u�yte do wyszukiwania
            if (!empty($query['q'])) {
                $tpl_output = smarty_modifier_google_highlight($tpl_output,
                                                               $query['q']);
            }
        }
    }
    return $tpl_output;
}
?>
