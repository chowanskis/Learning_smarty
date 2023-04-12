<?
include ("libs/smarty.class.php");
$smarty = new Smarty();

$smarty->assign("issue", 3);
$smarty->assign("month","PaŸdziernik");
$smarty->assign("year", 2005);

$books = array("Building websites with Mambo","Building Telephony Systems With Asterisk");
$images = array("http://www.packtpub.com/images/73x90/1904811736.png","http://www.packtpub.com/images/73x90/1904811159.png");

$smarty->assign("books", $books);
$smarty->assign("images", $images);

$review = <<< END
Wprowadzenie do korzystania i konfiguracji technologii Asterisk s³u¿¹cej do tworzenia rozbudowanych systemów telefonicznych dla ma³ych i œrednich przedsiêbiorstw.
W ksi¹¿ce pokazano, w jaki sposób utworzyæ system telefoniczny w domu lub w firmie wykorzystuj¹c Asterisk — darmow¹ aplikacjê typu open source. Ksi¹¿ka ‘Building a Telephony System with Asterisk’ prezentuje krok po kroku proces instalacji i konfiguracji systemu Asterisk. Pokazuje, w jaki sposób stworzyæ plan instalacji oraz utworzyæ plan numerów.
END;

$link = "http://www.packtpub.com/asterisk/book";
$title = "Building Telephony Systems With Asterisk";
$reviews = array("title"=>$title, 
                 "description"=>$review,
                 "link"=>$link);
$smarty->assign("reviews", $reviews);

$output = $smarty->fetch("newsletter.tpl");

$user = "jakisuzytkownik@jakasdomena.com";

$headers = "MIME-Version: 1.0 \n" ;
$headers .= "Content-Type: text/html; charset=iso-8859-1 \n";
$headers .= "From: i_am_not_spamming@my_domain.com \n";

//echo $output;
mail($user, "Newsletter", $output, $headers);
?>
