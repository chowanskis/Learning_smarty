<?php
include_once('libs/Smarty.class.php');
$smarty = new Smarty;

include_once('libs/class.misc.php');
$smarty->register_modifier('auto_link_urls', array('Misc', 
'autoLinkURLs'));

$content = 'Witamy w naszej witrynie WWW!

W przypadku pytañ, proszê siê z nami skontaktowaæ wype³niaj¹c formularz pod adresem:
http://www.example.com/contact.php

Kierownictwo.';
$smarty->assign(array(
    'content' => $content
));

$smarty->display('example_auto_link_urls.tpl');
?>
