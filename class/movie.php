<?php

class Movie
{
  
  public $title;
  public $language;
  public $grade;
  public $img;


  public function __construct(string $title, string $language, string $grade) {
    $this->title = $title;
    $this->language = $language;
    $this->grade = $grade;
    
}

public function setImg(string $img) {
    $this->img = $img;
}


}

?>
