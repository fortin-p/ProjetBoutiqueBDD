<?php
require_once 'database.php';
class Customer {

    public $first_name;
    public $last_name;
    public $adresse;
    public $zip_code;
    public $city;
    public $id;

    public function __construct($first_name,$last_name,$adresse,$zip_code,$city,$id)
    {
        $this->first_name=$first_name;
        $this->last_name=$last_name;
        $this->adresse=$adresse;
        $this->zip_code=$zip_code;
        $this->city=$city;
        $this->id=$id;


    }


}