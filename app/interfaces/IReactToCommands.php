<?php
namespace app\interfaces;

interface IReactToCommands
{
  public function readPoem($poemId);
  public function writePoem($content);
}
?>