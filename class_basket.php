<?php
require_once  'database.php';
require_once 'functions.php';
require_once 'article.php';
require_once 'basket.php';
require_once 'class_Catalogue.php';

$messageErrorPrice = "";
$articlesQuantite = [];
class Basket{
    Public $basket =[];


    public function __construct($Session){
        $this->getAll();
        if(!isset($_SESSION)){
            session_start();
        }
        if(!isset($_SESSION['panier'])){
            $_SESSION['panier'] = array();
        }
    }
    public function getAll(){
        $catalogue = new Catalogue();

        foreach ($_SESSION['panier'] as $value) {
            $explode = explode(',',$value); // Separateur de string
            $article= $catalogue->getArticleById($explode[0]); // on récupére a l'index 0 = l'id
            $article->setQuantityBasket($explode[1]); // a l'index 1 qui vaut a la quantity
            $this->basket[$explode[0]] = $article; // on stocke dans le basket

        }

    }

    public function add($id){
        if (isset($_SESSION['panier'][$id])){
            $_SESSION['panier'][$id]+=1;

        }else{
            $_SESSION['panier'][$id] = 1;

        }


    }

    public function del($id){
       unset($_SESSION['panier'][$id]);

    }




}
