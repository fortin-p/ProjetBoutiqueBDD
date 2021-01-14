<?php
require_once 'article.php';
require_once 'database.php';
require_once 'class_chaussure.php';
class Catalogue
{

    private $articles;
    private $articlesShoes;
    private $articlesfruits;

    public function __construct(){

    }

    public function getAllArticle(): array
    {   //On récupére nos donnees des articles!
        $reponse = selectAll();
        $donnees = $reponse->fetchAll(PDO::FETCH_ASSOC);
        $articles = [];

        foreach ($donnees as $catalogue){
            $article = new Article($catalogue['name'],$catalogue['description'],$catalogue['price'],$catalogue['image'],$catalogue['weight'],$catalogue['quantity'],$catalogue['available'],$catalogue['id'],$catalogue['categorie_id']);
            $articles[$catalogue['id']] = $article;
        }
        return $articles;
    }
    public function getAllShoe(): array
    {
        $reponse = selectAllShoes();
        $donnees = $reponse->fetchAll(PDO::FETCH_ASSOC);
        $articlesShoes = [];
        foreach ($donnees as $Shoe){
            $Shoe = new Shoe($Shoe['name'],$Shoe['description'],$Shoe['price'],$Shoe['image'],$Shoe['weight'],$Shoe['quantity'],$Shoe['available'],$Shoe['id'],$Shoe['categorie_id'],$Shoe['pointure'],$Shoe['marque']);
            array_push($articlesShoes,$Shoe);
        }
        return $articlesShoes;

    }

    public function getAllFruits(): array
    {
        $reponse = selectAllFruits();
        $donnees = $reponse->fetchAll(PDO::FETCH_ASSOC);
        $articlefruits = [];
        foreach ($donnees as $Fruit){
            $fruits = new Article($Fruit['name'],$Fruit['description'],$Fruit['price'],$Fruit['image'],$Fruit['weight'],$Fruit['quantity'],$Fruit['available'],$Fruit['id'],$Fruit['categorie_id']);
            array_push($articlefruits,$fruits);
        }
        return $articlefruits;
    }




}


