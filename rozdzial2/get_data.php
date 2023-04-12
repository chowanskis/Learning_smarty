<?php

class books {

//sk�adowe publiczne

public $title = array(); 
public $image = array(); 
public $author = array(); 
public $description = array(); 
public $year = array ();
public $price = array(); 

// sk�adowe prywatne 

private $filename = "data.txt";

//konstruktor klasy

function __construct()
{

  //pobranie wierszy w postaci tablicy

  $i=-1;
  $lines = file($this->filename);

  //obci�cie ci�gu "\n" na ko�cu ka�dej tablicy
  //pobieranie poszczeg�lnych zmiennych z tablicy

  foreach ( $lines as $line) {

	if (strlen($line) > 2) {
	
	$line = rtrim($line);

	list($what, $content) = explode("=> ", $line);

	if ($what == "Title") {
		$i++;
		$this->title[$i]=$content;
		}
	elseif ($what == "Image") {
		$this->image[$i]=$content;
		}
	elseif ($what == "Author") {
		$this->author[$i]=$content;
		}
	elseif ($what == "Description") {
		$this->description[$i]=$content;
		}
	elseif ($what == "Year") {
		$this->year[$i]=$content;
		}
	elseif ($what == "Price") {
		$this->price[$i]=$content;
 
		};
	    };
	};

} // Koniec konstruktora

} // koniec GetData
