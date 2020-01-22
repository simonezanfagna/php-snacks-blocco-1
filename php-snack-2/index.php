<?php

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

if (mb_strlen($name) > 3 && (strpos($mail,'.') !== false && strpos($mail,'@') ) &&(is_int(intval($age)) == 'bool(true')) {
  echo "Accesso riuscito";
}
else {
  echo "Accesso negato";
}

?>
