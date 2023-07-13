<?php 

class Movie {

    public $title;
    public $genre;
    public $year;
    public $language;
    //actor

    function _construct ( 
        String $_title, 
        String $_genre, 
        Int $_year, 
        String $_language){

        $this->title = $_title;
        $this->genre = $genre;
        $this->year = $year;
        $this->language = $language;

    }


    function getMovieName(){
        return $this->title;
    }


}

$mission_impossible = new Movie ();
$mission_impossible -> title = 'Mission Impossible';
$mission_impossible -> genre = 'action';
$mission_impossible -> year = 1996;
$mission_impossible -> language = 'English';
//$mission_impossible = new Movie ('Mission Impossible', 'Action', 1996, 'English');
echo $mission_impossible -> getMovieName();
var_dump ($mission_impossible);


$insidious = new Movie ();
$insidious -> title = 'Insidious: the red door';
$insidious -> genre = 'horror';
$insidious -> year = 2023;
$insidious -> language = 'English';
echo $insidious -> getMovieName();
var_dump ($insidious);


?>