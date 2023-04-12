<html>
<head>
<title>Bez tytu³u</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<table width="90%"  border="0" align="center" cellspacing="5">
  <tr>
    <td bgcolor="#FFFFFF"><img src="http://www.packtpub.com/images/Packt.png"></td>
    <td><div align="right">
      <h3>Biuletyn nr {$issue} {$month}, {$year} </h3>
    </div></td>
  </tr>
  <tr>
    <td width="31%" bgcolor="#999999"><table width="100%"  border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#999999"><div align="center"><strong>Ksi¹¿ki wydane w bie¿¹cym tygodniu </strong></div></td>
      </tr>
    {section name=book loop=$books}
      <tr>
        <td bgcolor="#FFFFFF"><div align="center"><img src='{$images[book]}' vspace="2"><br /> 
          <b>{$books[book]}</b> </div></td>
      </tr>
      {/section}
    </table></td>
    <td width="69%" valign="top">
    <p>
        <b>{$reviews.title}</b><br/>
        {$reviews.description}<br/>
        Czytaj wiêcej : <a href='{$reviews.link}'>Kliknij tu</a>
    </p>    </td>
  </tr>
  <tr>
    <td colspan="2"><div align="center"> &copy; Packt Publishing Ltd 2005 </div></td>
  </tr>
</table>
