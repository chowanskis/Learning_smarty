<?php
/*
 *Wtyczka  Smarty
 * Plik:     function.calendar.php
 * Typ:     funkcja
 * Nazwa:     calendar
 * Przeznaczenie:  Wyœwietla widok kalendarza dla miesi¹ca
 *Przyk³ad:  {calendar}
 *           {calendar month=4 year=2005}
 * Instalacja:  nale¿y skopiowaæ do katalogu plug-in
 */
function smarty_function_calendar($params, &$smarty)
{
    extract($params);
    $html_result = '';

    $time = time();
    // w przypadku braku parametru 'month' 
    // u¿ycie bie¿¹cego miesi¹ca
    if (!isset($month)) {
        $month = date("n", $time);
    }
    // w przypadku braku parametru 'year',  
    // u¿ycie bie¿¹cego roku.
    if (!isset($year)) {
        $year = date("Y", $time);
    }
    // uniksowy znacznik czasu dla pierwszego dnia miesi¹ca
    $first_day_ts = mktime(0, 0, 0, $month, 1, $year);

    // utworzenie nag³ówka tabeli
    $html_result = '<table border="1">';
    $html_result .= '<tr>
                      <th width="14%">Niedziela</th>
                      <th width="14%">Poniedzia³ek</th>
                      <th width="14%">Wtorek</th>
                      <th width="14%">Œroda</th>
                      <th width="14%">Czwartek</th>
                      <th width="14%">Pi¹tek</th>
                      <th width="14%">Sobota</th>
                    </tr>';
$current_day = 1;
    $current_week = 1;
    // total days within this month
    $total_days = date("t", $first_day_ts);
 
    // the week day number that the first day of the 
    // month falls on (Sunday = 0; Saturday = 6)
    $first_day = date("w", $first_day_ts);

    // loops through the days
    while ($current_day <= $total_days) {
        $html_result .= '<tr>';
        for ($i = 0; $i < 7; $i++) {
            if ((($current_week == 1)
                    && ($i >= $first_day)) ||
                    (($current_week > 1)
                    && ($current_day <= $total_days))) {
                $html_result .= '<td valign="top">';
                $html_result .= $current_day ;
                if ((isset($values)) && (!empty($values[$current_day]))) {
                    $html_result .= $values[$current_day];
                } else {
                    $html_result .= '&nbsp;';
                }
                $html_result .= '</td>';
                $current_day++;
            } else {
                $html_result .= '<td>&nbsp;</td>';
            }
        }
        $html_result .= '</tr>';
        $current_week++;
    }
    $html_result .= '</table>';

    print $html_result;
}
?>
