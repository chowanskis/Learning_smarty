<?php
function smarty_outputfilter_append_benchmark_data($source, &$smarty)
{
    global $benchmark;

    $source .= '<div id="benchmark">';

    $source .= "Wygenerowano w ci�gu ' . $benchmark . ' sekund.';
    $source .= '</div>';

    return $source;
}
?>
