<?php

function numeriRandom($min, $max){
  $numeri = [];
  while (count($numeri) < 15) {
    $numero = rand($min,$max);
    if (!in_array($numeri, $numero)) {
      array_push($numeri, $numero);
    }
  }
  return $numeri;
}

var_dump(numeriRandom(1, 100));

?>
