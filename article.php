<?php
require_once 'database.php';

class Article
{
    public $name;
    public $description;
    public $price;
    public $image;
    public $weight;
    protected $quantity;
    public $available;
    public $id;
    private $quantityBasket=1;


    public function getQuantityBasket()
    {
        return $this->quantityBasket;
    }


    public function setQuantityBasket($quantityBasket)
    {
        $this->quantityBasket = $quantityBasket;
    }

    public function __construct($name,$description,$price,$image,$weight,$quantity,$available,$id)
    {
        $this->name=$name;
        $this->description=$description;
        $this->price=$price;
        $this->image=$image;
        $this->weight=$weight;
        $this->setQuantity($quantity);
        $this->available=$available;
        $this->id=$id;

    }

    public function setQuantity($quantity){

        $this->quantity=$quantity;

    }
    public function getQuantity(){

        return $this->quantity;

    }


}









?>


