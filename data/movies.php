
<?php 


class Movie {
    /* public $title;
    public $description;
    public $genre;
    public $reviews;
    public $year; */
    protected $title;
    protected $description;
    protected $genre;
    protected $reviews;
    protected $year;

    public function __construct($title, $description, $genre, $reviews = null, $year)
    {
        $this -> title = $title;
        $this -> description = $description;
        $this -> genre = $genre;
        $this -> setReview($reviews);
        $this -> year = $year;
    }

    public function setReview($reviews) {
        if( is_string($reviews) && strlen($reviews) > 3 ) {
            $this -> reviews = $reviews;
        } else {
            $this -> reviews = 'ATTENZIONE il valore inserito non é vaildo';
        }
    }

    public function getTitle(){
        return $this -> title;
    }
    public function getDescription(){
        return $this -> description;
    }
    public function getGenre(){
        return $this -> genre;
    }
    public function getReviews(){
        return $this -> reviews;
    }
    public function getYear(){
        return $this -> year;
    }

}


$hulk = new Movie('Hulk', 'classico fil marvel salta spara salta schiva e spara salvo il mondo che poi significa salvare NYC', 'action', null , 1992);
$theFifthElement = new Movie('The Fifth Element', 'io metto le mani avanti, persino il regista non sa di che parla il film', 'sci-fi/action', null, 1997);




/* $theFifthElement -> setReview("123"); */
/* $theFifthElement -> setReview("ci"); */
$theFifthElement -> setReview("ridatemi il tempo che ho perso, maledetto ImDB, mi hai trollato");


?>




