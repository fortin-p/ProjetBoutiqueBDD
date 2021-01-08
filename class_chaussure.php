<?php
require_once 'database.php';
require_once 'article.php';

class Shoe extends Article{
    public $pointure;
    public $marque;
    public $id;
    public function __construct($pointure,$marque,$id){

    $this->pointure=$pointure;
    $this->marque=$marque;
    $this->id=$id;


    }





}