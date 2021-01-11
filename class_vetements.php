<?php
require_once 'database.php';
require_once 'article.php';

class Clothe extends Article{
    public $taille;
    public $couleur;

    public function __construct($taille,$couleur){
    $this->taille=$taille;
    $this->couleur=$couleur;

    }



}