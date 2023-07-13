<?php 

class Movie {

    public $title;
    public $genre;
    public $year;
    public $language;
    //actor

   // function __construct ( $_title, $_genre, $_year, $_language){
      //  $this->title = $_title;
        //$this->genre = $genre;

   // }

}

$missione_impossible = new Movie ();
$missione_impossible -> title = 'Mission Impossible';
$missione_impossible -> genre = 'action';
var_dump ($missione_impossible);

?>