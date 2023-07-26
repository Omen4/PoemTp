<?php
namespace app\controllers;

use app\interfaces\IWriteLines;

class PHPMvcPublisher implements IWriteLines
{
  public function publish($data)
  {
    // Publication des données à une vue générée (simulation)
    echo $data;
  }
}

?>