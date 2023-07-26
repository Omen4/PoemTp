<?php
namespace app\entities;

class Poem
{
  private $id;
  private $title;
  private $content;

  public function __construct($id, $title, $content)
  {
    $this->id = $id;
    $this->title = $title;
    $this->content = $content;
  }

  //Todo: getter + setters (?)
  public function getId()
  {
    return $this->id;
  }
}