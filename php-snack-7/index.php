<?php

$classe = [
  'Pippo Rossi' => [6, 4, 5, 8],
  'Pluto Rossi' => [3, 8, 6, 9],
  'Paperino Rossi' => [7, 5, 10, 5]
];

foreach ($classe as $studente => $value) {
  echo $studente . ' : ';
  $voti = 0;
  $nVoti = count($value);
  for ($i=0; $i < $nVoti ; $i++) {
    $voti += $value[$i];
  }
  echo $voti / $nVoti;
  echo "<br>";
}

?>
