<html>
<head>
<title>Przyk�adowa korporacja</title>
</head>
<body>

<h3>Przyk�adowa korporacja - Napisz do nas</h3>

<p>
  Wybierz dzia�, z kt�rym chcesz si� skontaktowa� i podaj informacje kontaktowe
  Skontaktujemy si� z Tob� w ci�gu 48 godzin.
</p>

{literal}
<script language="JavaScript">
<!--
function validateForm(f)
{
    if (f.details.value == '') {
        alert('Prosz� wpisa� informacje kontaktowe.');
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
    <td><b>Dzia�:</b></td>
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
      <b>Wiadomo��:</b><br />
      <textarea name="message" style="width: 100%;"></textarea>
    </td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" value="Wy�lij wiadomo��"></td>
  </tr>
</table>
</form>

</body>
