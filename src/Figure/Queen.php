<?php 

namespace Kozlovsky\Chess\Figure;

use Kozlovsky\Chess\Class\AbstractChessmen;
use Exception;

class Queen extends AbstractChessmen
{
  public function move(int $x, int $y)
  {
    try {
      if ($x < 1 or $x > 8 or $y < 1 or $y > 8) {
        throw new Exception('Недопустимый ход за край доски!');
      }
      if (abs($this->x - $x) == abs($this->y - $y) or $this->x == $x or $this->y == $y) 
        {
          $this->x = $x;
          $this->y = $y;
        }
      else {
        throw new Exception('Недопустимый ход!');
      }
    }
    catch (Exception $e) {
      echo 'Ошибка: ' .  $e->getMessage() . '</br>';
    }
  }
}
