<?
include ("libs/smarty.class.php");
$smarty = new Smarty();

    //...po³¹czenie z baz¹ danych mysql oraz inicjalizacja klasy smarty
    $conn = mysql_connect('localhost', 'root', 'krasnal');
    $db = mysql_select_db("smarty",$conn); 
    $result = mysql_query("SELECT title, image, price, author from books LIMIT 20");
    while ($row = mysql_fetch_assoc($result))
    {
        $titles[] = $row['title'];
        $images[] = $row['image'];
        $prices[] = $row['price'];
        $authors[] = $row['author'];
    }
    $smarty->assign("titles",$titles);
    $smarty->assign("images",$images);
    $smarty->assign("prices",$prices);
    $smarty->assign("authors",$authors);

    $smarty->display("sample_section2.tpl");

?>
