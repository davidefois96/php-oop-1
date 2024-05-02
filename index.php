<?php 


class Movie {

  private $name;
  private $genres;
  private $year;
  private $language;

  
  function __construct(string $_name, array  $_genres, int  $_year, string $_language){
    
    
    $this->setName($_name);
    $this->setGenres($_genres);
    $this->setYear($_year);
    $this->setLanguage($_language);

  }

  // SETTER


  public function setName($_name){
   
    $this->name = $_name;
  }

  public function setGenres($_genres){
    
    $this->genres = $_genres;
  }

  public function setYear($_year){
    
    $this->year = $_year;
  }

  public function setLanguage($_language){
    
    $this->language = $_language;
  }
 


  // GETTER 
 

  public function getName(){

    return $this->name;
  }

  public function getGenres(){

    return $this->genres;
  }

  public function getYear(){

    return $this->year;
  }

  public function getLanguage(){

    return $this->language;
  }


}


$movie1 = new Movie ('prova',['azione','giallo'],1999,'italiano');
$movie2 = new Movie ('prova2',['poliziesco','horror'],2012,'inglese');


var_dump($movie1);
var_dump($movie2);

$movie1->setName('pippo');
$movie2->setGenres(['romantico','documentario']);

var_dump($movie1->getName());

var_dump($movie1);
var_dump($movie2)



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
  <title>php-oop-1</title>
</head>
<body>
  
</body>
</html>