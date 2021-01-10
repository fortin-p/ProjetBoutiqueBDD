<?php
require_once 'database.php';
require_once 'article.php';
require_once 'class_Catalogue.php';
class Shoe extends Article{
    public $pointure;
    public $marque;


    public function __construct($pointure,$marque){
        $this->pointure=$pointure;
        $this->marque=$marque;
        $this->test();

    }


    function test(){
        $this->name="nike";
        $this->description="blabla";
        $this->price=15;
        $this->image=boeufpng;
        $this->weight=15;
        $this->quantity=100;
        $this->available=1;
        $this->id=15;


    }





}