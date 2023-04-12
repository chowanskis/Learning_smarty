<html>
<head> <title> Przyk³ad zastosowania metod assign i assign_by_ref </title>
</head>

<body>
<h3> Czeœæ, to ja — szablon index.tpl. Pos³uchajcie, co Wam powiem: </h3>
Otrzyma³em zmienn¹ $publisher o wartoœci :
    <font color="blue"> {$publisher} </font> <br>
Otrzyma³em zmienn¹ $website o wartoœci :
    <font color="blue"> {$website} </font> <br>
<br>
Zastosujê modyfikator UPPER dla obu zmiennych za pomoc¹ instrukcji : <br>
&nbsp;&nbsp;&nbsp; <b> assign var="publisher" value=$publisher|upper </b> <br>
&nbsp;&nbsp;&nbsp; <b> assign var="website" value=$website|upper </b> <br>
    {assign var="publisher" value=$publisher|upper}
    {assign var="website" value=$website|upper}
...Zrobione ! <br>
    TERAZ, zmienna $publisher ma wartoœæ:
    <font color="blue"> <b> {$publisher} </b></font> <br>
    natomiast $website ma wartoœæ <font color="blue"> <b> {$website} </b></font> <br>
    <h3> Koniec szablonu index.tpl </h3>
