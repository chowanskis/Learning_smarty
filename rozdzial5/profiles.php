<?
include("libs/smarty.class.php");
function compile_to_string(&$smarty, $filename) {
  $_params = array('resource_name' => $filename);
  $smarty->_fetch_resource_info($_params);
  $smarty->_compile_source($filename, $_params['source_content'], $compiled_content);
  return($compiled_content);
}

$smarty = new Smarty ();

mysql_connect("localhost","root","krasnal");
mysql_select_db("smarty");

$result = mysql_query("SELECT nick, name, born, blood_grp, email
                       FROM students st
                       LIMIT 10
                      "); 
$students = array(); 
while ($row = mysql_fetch_assoc($result))
{
	$students[] = $row; //append the whole $row array in $students
}

$smarty->assign("students",$students);


$smarty->display("profiles.tpl"); 
echo(compile_to_string($smarty,"profiles.tpl"));
?>
