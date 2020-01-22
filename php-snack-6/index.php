<?php

  $db = [
    'teachers' => [
      [
        'name' => 'Michele',
        'lastname' => 'Papagni'
      ],
      [
        'name' => 'Fabio',
        'lastname' => 'Forghieri'
      ]
    ],
    'pm' => [
      [
        'name' => 'Roberto',
        'lastname' => 'Marazzini'
      ],
      [
        'name' => 'Federico',
        'lastname' => 'Pellegrini'
      ]
    ]
  ];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>

    <div class="container">

      <?php foreach ($db as $key => $value) { ?>
        <?php if ($key == 'teachers') { ?>
          <div class="insegnati">
            <?php foreach ($value as $key2 => $value2) { ?>
              <p><?php echo $value2['name']; ?> <?php echo $value2['lastname']; ?></p>
            <?php } ?>
          </div>
        <?php } else { ?>
          <div class="pm">
            <?php foreach ($value as $key2 => $value2) { ?>
              <p><?php echo $value2['name']; ?> <?php echo $value2['lastname']; ?></p>
            <?php } ?>
          </div>
        <?php } ?>
      <?php } ?>

    </div>

  </body>
</html>
