<?php

class Movie {
  //variabili d’istanza
  public $title;
  public $director;
  public $year;
  public $genre;

  //costruttore
  function __construct($_title, $_director, $_year)
  {
    $this->title = $_title;
    $this->director = $_director;
    $this->year = $_year;
  }

  //metodi
  public function getChildrenControl(){
    $control = '';
    if($this->genre = 'Horror'){
      $control = 'Genere di film non adatto ad un pubblico minorenne';
    } return $control;
  }

}