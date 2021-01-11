<?php
require_once 'article.php';
require_once 'database.php';
require_once 'class_chaussure.php';
class Catalogue
{

    public $articles;
    public function __construct(){  //new catalogue appele ce construct et permet de récupéré nos articles!
        $this->articles=$this->getAllArticle();

    }



    function getAllArticle(){   //On récupére nos donnees des articles!
        $reponse = selectAll();
        $donnees = $reponse->fetchAll(PDO::FETCH_ASSOC);
        $articles = [];
        foreach ($donnees as $catalogue){
            $article = new Article($catalogue['name'],$catalogue['description'],$catalogue['price'],$catalogue['image'],$catalogue['weight'],$catalogue['quantity'],$catalogue['available'],$catalogue['id'] );
            array_push($articles,$article);


        }
        return $articles;
    }


}


