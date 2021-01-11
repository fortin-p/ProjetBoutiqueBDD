<?php
session_start();
require_once 'database.php';
require_once 'article.php';
require_once 'class_Catalogue.php';

class Shoe extends Article{

    public $pointure;
    public $marque;

    public function __construct($pointure,$marque){
        $this->pointure=$pointure;
        $this->marque=$marque;

    }

    function test(){
        $this->name="nike";
        $this->description="blabla";
        $this->price=15;
        $this->image=boeuf.png;
        $this->weight=15;
        $this->quantity=100;
        $this->available=1;
        $this->id=15;


    }

//    public function setPointure($pointure){
//
//        return $this->pointure=$pointure;
//
//    }
//
//
//    public function getPointure(){
//
//        return $this->pointure;
//
//    }





}