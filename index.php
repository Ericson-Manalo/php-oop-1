<?php 

class Movie {

    public $title;
    public $genre;
    public $year;
    public $language;
    public $actor;

    function __construct ( 
        String $_title, 
        String $_genre, 
        Int $_year, 
        String $_language){

        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->language = $_language;

    }


    public function getMovieName(){
        return $this->title;
    }


}


class Actor{
    public $name;
    public $surname;
    public $age;
    public $internationality;

    function _construct(
        String $name,
        String $surname,
        Int $age,
        String $internationality
    ){

    }
}

//$mission_impossible = new Movie ();
//$mission_impossible -> title = 'Mission Impossible';
//$mission_impossible -> genre = 'action';
//$mission_impossible -> year = 1996;
//$mission_impossible -> language = 'English';
$mission_impossible = new Movie ('Mission Impossible', 'Action', 1996, 'English');
echo $mission_impossible -> getMovieName();
var_dump ($mission_impossible);


$insidious = new Movie ();
$insidious -> title = 'Insidious: The Red Door';
$insidious -> genre = 'horror';
$insidious -> year = 2023;
$insidious -> language = 'English';
echo $insidious -> getMovieName();
var_dump ($insidious);


?>