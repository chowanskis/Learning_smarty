<html>
<head>
<title>Ankieta</title>
<style type="text/css">
{literal}
body,td,th {
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-size: 12px;
}
{/literal}
</style>
</head>
<body>
<p><strong>Ankieta</strong></p>
<form name="survey_form" method="post" action="">
  <table width="339" border="0" cellpadding="4" cellspacing="0">
    <tr>
      <td width="165">Nazwisko: </td>
      <td width="158"><input name="name" type="text" id="name"
          value="{$name}"></td>
    </tr>
    <tr>
      <td>Email: </td>
      <td><input name="email" type="text" id="email" value="{$email}"></td>
    </tr>
    <tr>
      <td>Kraj: </td>
      <td><select name="country">
        {html_options options=$countries selected=$country}
      </select></td>
    </tr>
    <tr>
      <td>Województwo: </td>
      <td><select name="state">
        {html_options options=$states selected=$state}
                  </select></td>
    </tr>
    <tr>
      <td valign="top">Nazwa firmy: </td>
      <td><p>
        <input type="text" name="company_name">
        <br>
        {$company_start}</p>      </td>
    </tr>
    <tr>
      <td valign="top">Pocz¹tek dzia³alnoœci: </td>
      <td>{html_select_date}</td>
    </tr>
    <tr>
      <td valign="top">Roczny przychód firmy: </td>
      <td>{html_radios name="yearly_revenue" options=$revenues 
           selected=$revenue separator="<br />"}
</td>
    </tr>
    <tr>
      <td valign="top">Podstawowy system operacyjny: </td>
      <td>
      <p>{html_checkboxes name="os" options=$oses selected=$os 
          separator="<br />"}</p>       
      </td>
    </tr>
  </table>
</form>
</body>
</html>
