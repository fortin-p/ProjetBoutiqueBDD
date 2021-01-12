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
            $articles[$catalogue['id']] = $article;
        }

        //on crée des nouveau objet chaussure que l'on ajoute au catalogue
        $b = new Shoe('nike',"nike",15,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbewCN1G-xC_Wt9OVZuadh6H1nbIN9IxbTYU2qZQj9nXW9xpl2NxFeFCN9om_toBZWFF6CBgs&usqp=CAc',15,15,1,100,42,'nike');
        $c = new Shoe('DC',"DC",15,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNniHvYQiWvj-0ZI4433V8olzOgcTVkwtzaYzo_LZE9r3BT-4diP88eyzTnE5S9HWUHHEzrmg&usqp=CAc',15,15,1,101,43,'DC');
        $articles[$b->id] = $b; //on ajoute les id a notre tableau $articles!
        $articles[$c->id] = $c;

        return $articles;
    }
    public function getArticleById($id):Article{

        return $this->articles[$id];

    }

}


