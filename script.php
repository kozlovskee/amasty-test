<?php

$words = ['red', 'blue', 'green', 'yellow', 'lime', 'magenta', 'black', 'gold', 'gray', 'tomato'];

function generateList(Array $words) {
  for ($i = 0; $i < 5; $i++) {
    $wordsIndex = array_rand($words, 5);
    shuffle($wordsIndex);
    foreach ($wordsIndex as $index){
      $color = pickColor($words, $words[$index]); 
      echo "<span style='color: $color;'>$words[$index]</span> ";
    }
    echo '<br>';
  }
}

function pickColor(Array $colors, String $word) {
  $colorNumber = array_rand($colors, 1);
  if ($colors[$colorNumber] == $word) {
    pickColor($colors, $word);
  }
  else {
    return $colors[$colorNumber];
  }
}