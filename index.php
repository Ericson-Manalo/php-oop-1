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
        String $_language,
        $_actor
        ){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->language = $_language;
        $this->actor = $_actor;
    }

    public function getMovieName(){
        return $this->title;
    }


}


class MainActor{
    public $name;
    public $surname;
    public $age;
    public $internationality;

    function __construct(
        String $name,
        String $surname,
        Int $age,
        String $internationality
    ){
    $this->name = $name;
    $this->surname = $surname;
    $this->age = $age;
    $this->internationality = $internationality;
    }
}

//$mission_impossible = new Movie ();
//$mission_impossible -> title = 'Mission Impossible';
//$mission_impossible -> genre = 'action';
//$mission_impossible -> year = 1996;
//$mission_impossible -> language = 'English';
$newActor = new MainActor ('Tom', 'Cruise', 1962, 'American');
$mission_impossible = new Movie ('Mission Impossible', 'Action', 1996, 'English', $newActor);
echo $mission_impossible -> getMovieName();
var_dump ($mission_impossible);


//$insidious = new Movie ();
//$insidious -> title = 'Insidious: The Red Door';
//$insidious -> genre = 'horror';
//$insidious -> year = 2023;
//$insidious -> language = 'English';
$newActor = new MainActor ('Patrick', 'Wilson', 1973, 'American');
$insidious = new Movie ('Insidious: The Red Door', 'horror', 2023, 'English', $newActor);
echo $insidious -> getMovieName();
var_dump ($insidious);


?>