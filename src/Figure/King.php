<?php 

namespace Kozlovsky\Chess\Figure;

use Kozlovsky\Chess\Class\AbstractChessmen;
use Exception;

class King extends AbstractChessmen
{
  public function move(int $x, int $y)
  {
    try {
      if ($x < 1 or $x > 8 or $y < 1 or $y > 8) {
        throw new Exception('Недопустимый ход за край доски!');
      }
      else {
        if (($this->x - $x == 1 or $this->x - $x == -1 or $this->x - $x == 0) 
        and ($this->y - $y == 1 or $this->y - $y == -1 or $this->y - $y == 0)) 
        {
          $this->x = $x;
          $this->y = $y;
        }
        else {
          throw new Exception('Недопустимый ход!');
        }
      }
    }
    catch (Exception $e) {
      echo 'Ошибка: ' .  $e->getMessage() . '</br>';
    }
  }
}
