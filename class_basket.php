<?php
require_once  'database.php';
require_once 'functions.php';
require_once 'article.php';
require_once 'basket.php';
require_once 'class_Catalogue.php';


class Basket{
    Public $basket = [];
    public function __construct($Session){
        //$this->getAll();

    }

//    public function getAll(){
//        $catalogue = new Catalogue();

//        foreach ($_SESSION['panier'] as $value) {
//            $explode = explode(',',$value); // Separateur de string
//            $article= $catalogue->getArticleById($explode[0]); // on récupére a l'index 0 = l'id
//            $article->setQuantityBasket($explode[1]); // a l'index 1 qui vaut a la quantity
//            $this->basket[$explode[0]] = $article; // on stocke dans le basket
//        }
//
//    }

  //  public function add($id){

//            $this->basket[] = $id;
//
//    }

//    public function update($id,$quantity){
//        foreach ($this->basket as $key => $item){
//            if ($id === $item['id']){
//
//                $this->basket[$key] = $quantity;
//
//            }
//
//        }
//
//    }
//    public function del($id){
//        if (isset($_POST['delete']))
//            foreach ($this->basket as $key => $item){
//                if ($id === $item['id']){
//
//                    unset($this->basket[$key]);
//
//                }
//
//            }
//
//
//    }


//
//    public function getBasket(): array
//    {
//        return $this->basket;
//    }
//
//
//
//
//    public function setBasket(array $basket)
//    {
//        $this->basket = $basket;
//    }


}
