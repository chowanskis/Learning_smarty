<html>
<head> <title> Przyk�ad architektury witryny </title> 
</head>

<body>

<table border="0" width="100%">
 <tr>
   <td align="left">
     <a href="http://www.packtpub.com">
      <img src="images\PacktLogoSmall.png" border="0">
     </a>
     <img src="images\focused.gif">
   </td>
   <td>
   <h1> Rozdzia� 2 � przyk�ad </h1>
   </td>
 </tr>
</table> 

<br> 
Oto ksi��ki wy�wietlane w tabeli sk�adaj�cej si� z dw�ch kolumn: 
<br> <br>

<table border="1" width="100%">

{section name=tbl loop=$book->title}

 {if %tbl.index% is not odd}

 <tr>
 {/if}

 <td align="left">
  <table>
   <tr>
    <td> 
      <img src="images\{$book->image[tbl]}" width="220">
    </td>
 
    <td valign="top">
      <font size=+1><b> {$book->title[tbl]} </b></font><br> 
      <font size=-1 color=blue><b>  {$book->author[tbl]} </b></font><br>
      {$book->description[tbl]} <br>
      Rok wydania: {$book->year[tbl]} <br>
      <font size=-1>Cena: <s>{$book->price[tbl]}</s> PLN</font> <br>
      Nasza cena: {$book->discounted[tbl]} PLN 
      <font color=red> oszcz�dzaj {$book->discount[tbl]} % </font>
    </td>
   </tr>
  </table>
 </td> 

 {if %tbl.index% is odd}

 </tr>
 {/if}

{/section}

</table>

</body>

</html>
