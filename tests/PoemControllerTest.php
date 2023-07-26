<?php

use PHPUnit\Framework\TestCase;

use app\controllers\PoemController;
use app\interfaces\IReactToCommands;


class PoemControllerTest extends TestCase
{
  public function testReadPoem()
  {
    // Mock du port IReactToCommands
    $poemServiceMock = $this->createMock(IReactToCommands::class);
    $poemServiceMock->expects($this->once())
      ->method('readPoem')
      ->willReturn('Poem Content');

    $controller = new PoemController($poemServiceMock);
    $result = $controller->readPoem(1);

    $this->assertEquals('Poem Content', $result);
  }

  public function testWritePoem()
  {
    // Mock du port IReactToCommands
    $poemServiceMock = $this->createMock(IReactToCommands::class);
    $poemServiceMock->expects($this->once())
      ->method('writePoem')
      ->willReturn(true);

    $controller = new PoemController($poemServiceMock);
    $result = $controller->writePoem('New Poem Content');

    $this->assertTrue($result);
  }
}

?>