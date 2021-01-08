<?php
require_once 'article.php';
require_once 'database.php';
require_once 'class_chaussure.php';
class Catalogue
{

    public $articles = array();
    public function __construct(){  //new catalogue appele ce construct et permet de récupéré nos articles!
        $this->getAllArticle();
        $this->getAllShoes();

    }



    function getAllArticle(){   //On récupére nos donnees des articles!
        $reponse = selectAll();
        while($donnees = $reponse->fetch()){

            $article = new Article($donnees['name'],$donnees['description'],$donnees['price'],$donnees['image'],$donnees['weight'],$donnees['quantity'],$donnees['available'],$donnees['id']);

            $this->articles [$donnees['id']] = $article; // on stocke les donnees dans l'array;

        }

    }
    function getAllShoes(){
        $reponse = selectAllShoes();
        while($donnees = $reponse->fetch()){

            $chaussure = new Shoe($donnees['pointure'],$donnees['marque'],$donnees['id']);
            $this->articles [donnees['pointure']] = $chaussure;

        }



    }
}


