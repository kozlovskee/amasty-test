<?php 

$data = file_get_contents('php://input');
$data = json_decode($data, true);

$nominal = [5,10,20,50,100,200,500];
$sum = $data['sum'];

if(validateSum($sum)) {

  rsort($nominal);

  $lastIndex = array_key_last($nominal);

  if ($sum % $nominal[$lastIndex] == 0) {
    foreach ($nominal as $num) {
      $result[strval($num)] = intdiv($sum, $num);
      $sum = $sum - $result[strval($num)] * $num;
    }
  }
  else {
    $closestNumbers = getClosestNumbers($sum, $nominal[$lastIndex]);
    $closestMinNum = $closestNumbers['min'];
    $closestMaxNum = $closestNumbers['max'];
    $result['error'] = true;
    $result['textError'] = "Введите другое число, ближайшие $closestMinNum и $closestMaxNum";
  }
}
else {
  $result['error'] = true;
  $result['textError'] = "Введите правильное число!";
}

echo json_encode(['response' => $result]);






function validateSum($sum) {
  trim($sum);
  if (preg_match('/^[0-9]+$/', $sum)) {
    return true;
  }
  else {
    return false;
  }
}

function getClosestNumbers($num, $divisor) {
  $closestMaxNum = $num;
  $closestMinNum = $num;
  while ($closestMaxNum % $divisor != 0) {
    $closestMaxNum++;
  }
  while ($closestMinNum % $divisor != 0) {
    $closestMinNum--;
  }

  $closestNumbers = [
    "max" => $closestMaxNum,
    "min" => $closestMinNum
  ];
  return $closestNumbers;
}