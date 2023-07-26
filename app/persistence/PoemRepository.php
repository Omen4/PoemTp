<?php
namespace app\persistence;

use app\entities\Poem;
use app\interfaces\IObtainPoems;

class PoemRepository implements IObtainPoems
{
  private $poems = [
    //Todo: Format du poème?

  ];

  public function addPoem(Poem $poem)
  {
    $this->poems[$poem->getId()] = $poem;
  }

  public function getPoemById($poemId)
  {
    return isset($this->poems[$poemId]) ? $this->poems[$poemId] : null;
  }

  public function getAllPoems()
  {
    return $this->poems;
  }
}