<?php
namespace app\interfaces;

interface IReactToCommands
{
  //méthodes passe-plat
  public function readPoem($poemId);
  public function writePoem($content);
}