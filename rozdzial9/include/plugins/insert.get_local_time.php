<?php
// Dla potrzeb tej funkcji wykorzystamy pakiet Date z repozytorium PEAR
require_once('Date.php');
function smarty_insert_get_local_time($params, &$smarty)
{
    if ($params['city'] == 'houston') {
        $date = new Date();
        // przekszta�cenie na stref� czasow� CST
        $date->convertTZByID('America/Chicago');
        //getDate() zwraca dat� w nast�puj�cym formacie:
        //np. 2005-12-21 12:34:32
        $local_time = $date->getDate();
       }
        //... to samo dla innych miast
        return $local_time;
 }
?>
