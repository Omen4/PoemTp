<?php
namespace app\controllers;

use app\interfaces\IReactToCommands;

class PoemController
{
  private $poemService;

  public function __construct(IReactToCommands $poemService)
  {
    //Implémentation du port
    $this->poemService = $poemService;
  }

  public function readPoem($poemId)
  {
    return $this->poemService->readPoem($poemId);
  }

  public function writePoem($content)
  {
    return $this->poemService->writePoem($content);
  }
}

?>