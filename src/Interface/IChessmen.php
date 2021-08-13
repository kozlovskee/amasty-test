<?php

namespace Kozlovsky\Chess\Interface;

interface IChessmen 
{
  public function move(int $x, int $y);
  public function getPosition();
}