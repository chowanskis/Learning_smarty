<?php
class bo_books {
//sk³adowe publiczne
public $title = array();
public $image = array();
public $author = array();
public $description = array();
public $year = array();
public $price = array();
public $discount = array();
public $discounted = array();
// sk³adowe prywatne
protected $Dataobject;
function __construct()
{
    $this->Dataobject = new books();
}
public function apply_discount()
{
    $this->title = $this->Dataobject->title;
    $this->image = $this->Dataobject->image;
    $this->author = $this->Dataobject->author;
    $this->description = $this->Dataobject->description;
    $this->year = $this->Dataobject->year;
    $this->price = $this->Dataobject->price;

    $j = 0;
    foreach($this->year as $year)
    {

        if ($this->year[$j] == '2004')
            $this->discount[$j] = '20';
        elseif ($this->year[$j] == '2005')
            $this->discount[$j] = '10';
        $this->discounted[$j] = intval($this->price[$j] *
                                 (100 - $this->discount[$j]))/100;
        $j++;
    };
    } // koniec funkcji app1y_discount()
} // koniec klasy bo_books
