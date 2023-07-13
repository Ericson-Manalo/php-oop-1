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



}

$missione_impossible = new Movie ();
$missione_impossible -> title = 'Mission Impossible';
$missione_impossible -> genre = 'action';
$missione_impossible -> year = 1996;
$missione_impossible -> language = 'English';

var_dump ($missione_impossible);

?>