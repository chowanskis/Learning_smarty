<html>
<body>
<table>
<tr><td>Nazwisko</td><td>Nr w dzienniku</td></tr>
{foreach item=student from=$students}    
	<tr>
      <td>{$student.nazwisko}</td>
      <td>{$student.nr_w_dzienniku}</td>
</tr>
		{/foreach}
		</table>
		</body>
</html>
