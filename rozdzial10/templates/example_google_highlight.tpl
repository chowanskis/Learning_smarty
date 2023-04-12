<html>
<head>
<title>Przyk³adowa korporacja</title>
</head>
<body>

Wyniki wyszukiwania:<br />
<ul>
{section name="i" loop=$search_results}
  <li>{$search_results[i]|google_highlight:$keywords}</li>
{sectionelse}
 
      <li>Nie znaleziono wyników dla '{$keywords}'.</li>
    {/section}
    </ul>

    Wyniki 1 - {$search_results|@count}.

</body>
</html>
