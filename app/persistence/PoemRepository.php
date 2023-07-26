<?php
namespace app\persistence;

use app\entities\Poem;
use app\interfaces\IObtainPoems;

class PoemRepository implements IObtainPoems
{
  private $poems = [];

  public function addPoem(Poem $poem)
  {
    // Add a new poem to the repository
    $this->poems[$poem->getId()] = $poem;
  }

  public function getPoemById($poemId)
  {
    // Find and return the poem by its ID
    return isset($this->poems[$poemId]) ? $this->poems[$poemId] : null;
  }

  public function getAllPoems()
  {
    // Return all poems in the repository
    return $this->poems;
  }
}

?>