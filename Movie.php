<?php

class Movie {
  //variabili d’istanza
  public $title;
  public $director;
  public $year;
  public $genre;
  public $dop;

  //costruttore
  function __construct($_title, $_director, $_year, $_genre)
  {
    $this->title = $_title;
    $this->director = $_director;
    $this->year = $_year;
    $this->genre = $_genre;
  }

  //metodi
  public function getParentControl(){
    $control = '';
    if($this->genre = 'Horror'){
      $control = 'Genere non adatto ad un pubblico minorenne';
    }return $control;
  }

}