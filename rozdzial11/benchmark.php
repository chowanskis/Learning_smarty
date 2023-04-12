<?php
//ini_set("include_path",".;c:\\server\\xampp\\php\\pear\\");
include_once('libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->force_compile = TRUE;

// Pakiet Benchmark::Timer z repozytorium PEAR
include_once('Benchmark/Timer.php');
$bench = new Benchmark_Timer;
$bench->start();

function register_compilation($source, &$smarty)
{
    $GLOBALS['bench']->setMarker('Zako�czono kompilacj�');
    return $source;
}

function append_benchmark_results($output, &$smarty)
{
    $GLOBALS['bench']->stop();
    $results = $GLOBALS['bench']->getProfiling();
    $output .= '<table border=1>';
    $output .=  
'<tr><th>Znacznik</th><th>R�nica</th><th>Razem</th></tr>';
    for ($i = 0; $i < count($results); $i++) {
        $output .= '<tr><td>' . $results[$i]['name'] . '</td>';
        $output .= '<td>' . $results[$i]['diff'] . '</td>';
        $output .= '<td>' . $results[$i]['total'] .  
'</td></tr>';
    }
    $output .= '</table>';

    return $output;
}

function remove_html_comments($source, &$smarty)
{
    //usuni�cie komentarzy ze �r�d�a szablonu, nawet je�li 
    // obejmuj� wiele wierszy
    return preg_replace('/<!--.*-->/Ums', '', $source);
}

$bench->setMarker('Przed wy�wietleniem');

$smarty->register_prefilter('remove_html_comments');
$smarty->register_postfilter('register_compilation');
$smarty->register_outputfilter('append_benchmark_results');
$smarty->load_filter('output', 'trimwhitespace');
$smarty->display('benchmark.tpl');
?>
