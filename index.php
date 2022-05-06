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
$theFifthElement = new Movie('The Fifth Element', 'io metto le mani avanti, persino il regista non sa di che parla il film', 'sci-fi/action', null, '20 August 1997');
var_dump($theFifthElement);



$theFifthElement -> setReview("ridatemi il tempo che ho perso, maledetto ImDB, mi hai trollato");


var_dump($theFifthElement)


?>