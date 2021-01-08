<?php
require_once 'database.php';
require_once 'Class_client.php';

class ListCustomer{

    public $customers = array();
    public function __construct(){
        $this->getAllCustomers();


    }
function getAllCustomers(){
    $reponse = selectAllCustomers();
    while($donnees = $reponse->fetch()){
        $client = new Customer($donnees['first_name'],$donnees['last_name'],$donnees['adresse'],$donnees['zip_code'],$donnees['city'],$donnees['id']);
        $this->customers [$donnees['id']] = $client;

    }

}



}