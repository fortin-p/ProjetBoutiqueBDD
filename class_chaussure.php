<?php

require_once 'database.php';
require_once 'article.php';
require_once 'class_Catalogue.php';

class Shoe extends Article{

    private $pointure;
    private $marque;


    public function __construct($name,$description,$price,$image,$weight,$quantity,$available,$id,$pointure,$marque){
        parent::__construct($name,$description,$price,$image,$weight,$quantity,$available,$id);
        $this->setPointure($pointure);
        $this->setMarque($marque);

    }


    public function setPointure($pointure){

        $this->pointure=$pointure;

    }
    public function setMarque($marque){

        $this->marque=$marque;

    }
    public function getMarque(){

        return $this->marque;

    }

    public function getPointure(){

        return $this->pointure;

    }





}