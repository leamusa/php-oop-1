<?php

class Movie
{
  
  public $title;
  public $language;
  public $grade;
  public $img;


  public function __construct(string $title, string $language, int $grade) {
    $this->title = $title;
    $this->language = $language;
    $this->grade = $grade;
    
}

  
  
public function getTitle(): string {
    return $this->title;
}
public function getLanguage(): string {
    return $this->language;
}
public function getGrade(): int {
    return $this->grade;
}
public function getImg(): string {
    return $this->img;
}
public function setImg(string $img) {
    $this->img = $img;
}


}

?>
