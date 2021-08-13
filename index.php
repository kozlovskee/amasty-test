<?php

require_once __DIR__ . '/vendor/autoload.php';

use Kozlovsky\Chess\Figure\{King, Queen};

$queen = new Queen(1, 1);
$king = new King(4, 3);

$queen->move(7, 3);
$king->move(2, 2);

$queen->getPosition();
$king->getPosition();

