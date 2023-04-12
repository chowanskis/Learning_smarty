<?php

function smarty_insert_getCurrentTime()
{
   setlocale(LC_ALL, 'polish');
   return strftime('%A, %d %B  %Y %H:%M %Z');
}
?>
