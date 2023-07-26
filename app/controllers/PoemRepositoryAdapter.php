<?php
namespace app\controllers;

use app\interfaces\IObtainpoems;
use app\persistence\PoemRepository;

class PoemRepositoryAdapter implements IObtainPoems
{
  private $poemRepository;

  public function __construct(PoemRepository $poemRepository)
  {
    // Nécessite la db pour l'implémenter
    $this->poemRepository = $poemRepository;
  }

  public function getPoemById($poemId)
  {
    // Appel à la méthode du PoemRepository pour récupérer un poème par son ID
    return $this->poemRepository->getPoemById($poemId);
  }
}

?>