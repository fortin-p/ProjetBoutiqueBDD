<?php
require_once 'article.php';
require_once 'database.php';
require_once 'class_chaussure.php';
class Catalogue
{

    private $articles;
    private $articlesShoes;
    private $articlesfruits;

    public function __construct(){  //new catalogue appele ce construct et permet de récupéré nos articles!
        $this->articles=$this->getAllArticle();
        $this->articlesShoes=$this->getAllShoe();
        $this->articlesfruits=$this->getAllFruits();

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

    public function getAllFruits(){
        $reponse = selectAllFruits();
        $donnees = $reponse->fetchAll(PDO::FETCH_ASSOC);
        $articlefruits = [];
        foreach ($donnees as $Fruit){
            $fruits = new Article($Fruit['name'],$Fruit['description'],$Fruit['price'],$Fruit['image'],$Fruit['weight'],$Fruit['quantity'],$Fruit['available'],$Fruit['id'],$Fruit['categorie_id']);
            array_push($articlefruits,$fruits);
        }
        return $articlefruits;
    }

    /**
     * @return array
     */
    public function getArticlesShoes(): array
    {
        return $this->articlesShoes;
    }

    /**
     * @param array $articlesShoes
     */
    public function setArticlesShoes(array $articlesShoes)
    {
        $this->articlesShoes = $articlesShoes;
    }


    public function getArticleById($id):Article{

        return $this->articles[$id];

    }
    /**
     * @return array
     */
    public function getArticles(): array
    {
        return $this->articles;
    }

    /**
     * @param array $articles
     */
    public function setArticles(array $articles)
    {
        $this->articles = $articles;
    }
    /**
     * @return array
     */
    public function getArticlesfruits(): array
    {
        return $this->articlesfruits;
    }

    /**
     * @param array $articlesfruits
     */
    public function setArticlesfruits(array $articlesfruits)
    {
        $this->articlesfruits = $articlesfruits;
    }
}


