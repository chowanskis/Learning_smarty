<?
include_once("libs/smarty.class.php");
$smarty =new smarty();

$smarty->assign("name", "Junayed Ahnaf");
$smarty->assign("email", "junayed@sampledomain.com");

$countries = array("Bangladesz", "Indie", "Pakistan", "Nepal", "Maldiny", "Srilanka", "Bhutan");
$country = 0;
$smarty->assign("countries", $countries);
$smarty->assign("country", $country);

$states = array("woj1", "woj2", "woj3", "woj4", "woj5");
$state = 3;
$smarty->assign("states", $states);
$smarty->assign("state", $state);

$smarty->assign("company_name", "Mój œwiat");
$smarty->assign("company_start_date", "12/2001");


$smarty->assign('revenues', array(
            1 => '$0-$10000',
            2 => '$10000-$20000',
            3 => '$20000-$50000',
            4 => '$50000+'));
$smarty->assign('revenue', 2);

$smarty->assign('oses', array(
            1 => 'Windows XP',
            2 => 'Linux',
            3 => 'Sun Solaris',
            4 => 'Mac OS'));
$smarty->assign("os", array(2,1));
$smarty->display("survey.tpl");
?>
