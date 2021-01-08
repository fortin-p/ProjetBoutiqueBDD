<?php
require_once 'database.php';

class shoe extends Article{
    public $pointure;
    public $marque;

    public function __construct($pointure,$marque){
        $this->pointure=$pointure;
        $this->marque=$marque;


    }


}