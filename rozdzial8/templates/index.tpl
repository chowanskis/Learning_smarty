<html>
<head> <title> Przyk�ad zastosowania metod assign i assign_by_ref </title>
</head>

<body>
<h3> Cze��, to ja � szablon index.tpl. Pos�uchajcie, co Wam powiem: </h3>
Otrzyma�em zmienn� $publisher o warto�ci :
    <font color="blue"> {$publisher} </font> <br>
Otrzyma�em zmienn� $website o warto�ci :
    <font color="blue"> {$website} </font> <br>
<br>
Zastosuj� modyfikator UPPER dla obu zmiennych za pomoc� instrukcji : <br>
&nbsp;&nbsp;&nbsp; <b> assign var="publisher" value=$publisher|upper </b> <br>
&nbsp;&nbsp;&nbsp; <b> assign var="website" value=$website|upper </b> <br>
    {assign var="publisher" value=$publisher|upper}
    {assign var="website" value=$website|upper}
...Zrobione ! <br>
    TERAZ, zmienna $publisher ma warto��:
    <font color="blue"> <b> {$publisher} </b></font> <br>
    natomiast $website ma warto�� <font color="blue"> <b> {$website} </b></font> <br>
    <h3> Koniec szablonu index.tpl </h3>
