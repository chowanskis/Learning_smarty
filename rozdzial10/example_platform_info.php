<?php
include_once('libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->register_function('platform_info', array('Info', 'printPlatformDetails'));
class Info
{
    function printPlatformDetails($params, &$smarty)
    {
        echo 'Wykonano z wykorzystaniem PHP ' . phpversion();
        echo ' i Smarty ' . $smarty->_version;
    }
}
$smarty->display('example_platform_info.tpl');
?>
