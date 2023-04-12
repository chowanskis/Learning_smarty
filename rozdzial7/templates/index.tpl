<html>
<head>
<title>Przyk³adowa korporacja</title>
</head>
<body>

<h3>Przyk³adowa korporacja - Napisz do nas</h3>

<p>
  Wybierz dzia³, z którym chcesz siê skontaktowaæ i podaj informacje kontaktowe
  Skontaktujemy siê z Tob¹ w ci¹gu 48 godzin.
</p>

{literal}
<script language="JavaScript">
<!--
function validateForm(f)
{
    if (f.details.value == '') {
        alert('Proszê wpisaæ informacje kontaktowe.');
        return false;
    }
    return true;
}
//-->
</script>
{/literal}
 
<form method="post" action="contact_handler.php" onSubmit="return validateForm(this);">
<table border="1">
  <tr>
    <td><b>Dzia³:</b></td>
    <td>
      {strip}
      {foreach key="name" item="description" from=$departments}
      <input type="radio" name="dept" value="{$name}"{if $name == 'marketing'}checked {/if}> {$description}<br />
      {/foreach}
      {/strip}
    </td>
  </tr>
  <tr>
    <td><b>Twoje informacje kontaktowe:</b></td>
    <td>
      <input type="text" name="details" size="40">
    </td>
  </tr>
  <tr>
    <td colspan="2">
      <b>Wiadomoœæ:</b><br />
      <textarea name="message" style="width: 100%;"></textarea>
    </td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" value="Wyœlij wiadomoœæ"></td>
  </tr>
</table>
</form>

</body>
