<?php 


class Movie {

  private $name;
  private $genres;
  private $year;
  private $language;
  private $poster;

  
  function __construct(string $_name, array  $_genres, int  $_year, string $_language, string $_poster){
    
    
    $this->setName($_name);
    $this->setGenres($_genres);
    $this->setYear($_year);
    $this->setLanguage($_language);
    $this->setPoster($_poster);

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
  public function setPoster($_poster){
    
    $this->poster = $_poster;
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
  public function getPoster(){

    return $this->poster;
  }


}



?>