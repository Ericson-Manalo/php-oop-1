<?php 

class Movie {

    public $title;
    public $genre;
    public $year;
    public $language;
    //actor

    function _construct ( $_title, $_genre, $_year, $_language){
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

echo $mission_impossible -> getMovieName();
var_dump ($mission_impossible);

?>