<?php
include_once('Benchmark/Timer.php');
$bench = new Benchmark_Timer;
$bench->start();

include_once('include/smarty.class.php');
$smarty = new smarty;
$smarty->caching = 0;
$bench->setMarker(__LINE__);

// ca³kowite wyzerowanie bufora Smarty
$smarty->assign('name', 'Joao Prado Maia');
$smarty->display('cache_handler.tpl');
$bench->stop();
var_dump($bench->getProfiling());
?>
