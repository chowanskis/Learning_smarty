<?
   include_once("libs/smarty.class.php");
   $smarty = new smarty();
   $students = array(
               "damian" => array("nazwisko"=>"Damian Balewski", "nr_w_dzienniku"=>12), 
               "edmund" => array("nazwisko"=>"Edmund Hryniewiecki", "nr_w_dzienniku"=>18),
               "henryk" => array("nazwisko"=>"Henryk Talaga", "nr_w_dzienniku"=>23));
   $smarty->assign("students",$students);
   $smarty->display("associative_array.tpl");
?>
