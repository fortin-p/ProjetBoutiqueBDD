<?php
require_once 'article.php';
require_once 'database.php';
require_once 'class_chaussure.php';
class Catalogue
{

    public $articles;
    public $articlesShoes;
    public function __construct(){  //new catalogue appele ce construct et permet de récupéré nos articles!
        $this->articles=$this->getAllArticle();
        //$this->articles=$this->getAllShoe();
    }



    public function getAllArticle(){   //On récupére nos donnees des articles!
        $reponse = selectAll();
        $donnees = $reponse->fetchAll(PDO::FETCH_ASSOC);
        $articles = [];

        foreach ($donnees as $catalogue){
            $article = new Article($catalogue['name'],$catalogue['description'],$catalogue['price'],$catalogue['image'],$catalogue['weight'],$catalogue['quantity'],$catalogue['available'],$catalogue['id'],$catalogue['categorie_id']);
            $articles[$catalogue['id']] = $article;
        }


        return $articles;
    }
    public function getAllShoe(){
        $reponse = selectAllShoes();
        $donnees = $reponse->fetchAll(PDO::FETCH_ASSOC);
        $articlesShoes = [];
        foreach ($donnees as $Shoe){
            $Shoe = new Shoe($Shoe['name'],$Shoe['description'],$Shoe['price'],$Shoe['image'],$Shoe['weight'],$Shoe['quantity'],$Shoe['available'],$Shoe['id'],$Shoe['categorie_id'],$Shoe['pointure'],$Shoe['marque']);
            array_push($articlesShoes,$Shoe);
        }
return $articlesShoes;

    }


    public function getArticleById($id):Article{

        return $this->articles[$id];

    }

}


