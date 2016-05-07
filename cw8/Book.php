<?php

class Book {

    //pola klasy - wlasciwosci
    private $title;
    private $author;
    private static $id=0;
    private $ID;

    //metody 
    public function SetTitle($title) {
        $this->title = $title;
    }
    public function GetId(){
        return self::$id;
       
    }

    public function SetAuthor($author = "noname") {
        $this->author = $author;
    }

    public function SetAll($title = "", $author = "noname") {
//                $this->author = $author;
//                $this->title = $title;
        $this->SetTitle($title);
        $this->SetAuthor($author);
    }
    public static function Inna($arg){
        return "<p>Z metody statycznej: {$arg} </p>";
    }

    public function __construct($title = "", $author = "noname") {
        $this->SetTitle($title);
        $this->SetAuthor($author);
        self::$id++ ;
         $this->ID = self::$id;
        echo "<p>To ja konstruktor</p>";
    }
    
    public function __toString() {
        $html = "<p>Informacja o książce</p>";
        $html .= "<p>Tytuł: {$this->title}</p>";
        $html .= "<p>Autor: {$this->author}</p>";
        return $html;
    }

}
