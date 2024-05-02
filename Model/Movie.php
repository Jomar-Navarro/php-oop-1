<?php

class Movie
{
  public $title;
  public $year;
  public $genre;
  public $vote;


  public function __construct(string $_title, int $_year, string $_genre, int $_vote)
  {
    $this->title = $_title;
    $this->year = $_year;
    $this->genre = $_genre;
    $this->vote = $_vote;
  }
}
