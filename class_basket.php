<?php
require_once  'database.php';
require_once 'functions.php';
require_once 'article.php';
require_once 'basket.php';
require_once 'class_Catalogue.php';


class Basket{

    Public $basket = [];
    public function __construct(){


    }

    public function getArticles(): array
    {
        $articles = [];
        foreach ($_SESSION['panier'] as $product)
        {
            $reponse = selectArticle($product[0]);
            $donnees = $reponse->fetch(PDO::FETCH_ASSOC);
            $article = new Article($donnees['name'],$donnees['description'],$donnees['price'],$donnees['image'],$donnees['weight'],$donnees['quantity'],$donnees['available'],$donnees['id'],$donnees['categorie_id']);
            $article->setQuantityBasket($product[1]);
            array_push($articles,$article);
        }
        return $articles;
    }

    public function addArticle($id){
        $isExist = false;
        for ($i=0; $i < count($_SESSION['panier']); $i++)
        {
            if($_SESSION['panier'][$i][0] == $id)
            {
                $_SESSION['panier'][$i][1] += 1;
                $isExist = true;
            }

        }
        if (!$isExist){

            array_push($_SESSION['panier'],array($id,1));
        }

    }

    public function updateArticle($id){
        $this->basket[$id] += 1;


    }

    public function delArticle($id){
        if (isset($_POST['delete']))
            unset($_SESSION['panier'][$id]);

    }



    public function getBasket(): array
    {
        return $this->basket;
    }




    public function setBasket(array $basket)
    {
        $this->basket = $basket;
    }


}
