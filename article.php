<?php
require_once 'database.php';

class Article
{
    public $name;
    public $description;
    public $price;
    public $image;
    public $weight;
    public $quantity;
    public $available;
    public $id;

    public function __construct($name,$description,$price,$image,$weight,$quantity,$available,$id)
    {
        $this->name=$name;
        $this->description=$description;
        $this->price=$price;
        $this->image=$image;
        $this->weight=$weight;
        $this->quantity=$quantity;
        $this->available=$available;
        $this->id=$id;

    }

}







?>


