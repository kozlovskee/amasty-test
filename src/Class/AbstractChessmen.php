<?php

namespace Kozlovsky\Chess\Class;

use Kozlovsky\Chess\Interface\IChessmen;

abstract class AbstractChessmen implements IChessmen
{
  protected int $x;
  protected int $y;

  public function __construct(int $x, int $y)
  {
    $this->x = $x;
    $this->y = $y;
  }

  public function getPosition()
  {
    echo "x: $this->x, y: $this->y <br>" ;
  }
}