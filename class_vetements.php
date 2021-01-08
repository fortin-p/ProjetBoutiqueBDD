<?php
class Clothe extends Article{
    public $taille;
    public $couleur;

    public function __construct($taille,$couleur){
        $this->taille=$taille;
        $this->couleur=$couleur;


    }
}