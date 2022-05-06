<?php 


class Movie {
    protected $title;
    protected $description;
    protected $genre;
    protected $reviews;
    private $exitDate;

    public function __construct($title, $description, $genre, $reviews = null, $exitData)
    {
        $this -> title = $title;
        $this -> description = $description;
        $this -> genre = $genre;
        $this -> reviews = $reviews;
        $this -> exitData = $exitData;
    }

    public function setReview($reviews) {
        if( strlen($reviews) > 3 ) {
            $this -> reviews = $reviews;
        }
    }

}


$hulk = new Movie('Hulk', 'classico fil marvel salta spara salta schiva e spara salvo il mondo che poi significa salvare NYC', 'action', null , '31 December 1992');
var_dump($hulk);


$hulk -> setReview("ridatemi il tempo che ho perso");

var_dump($hulk)

?>