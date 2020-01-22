<?php

$posts = [
  '10/01/2019' => [
    [
        'title' => 'Post 1',
        'author' => 'Simone',
        'text' => 'Testo post 1'
    ],
    [
        'title' => 'Post 2',
        'author' => 'Simone',
        'text' => 'Testo post 2'
    ],
  ],
  '10/02/2019' => [
    [
        'title' => 'Post 3',
        'author' => 'Simone',
        'text' => 'Testo post 3'
    ]
  ],
  '15/05/2019' => [
    [
        'title' => 'Post 4',
        'author' => 'Simone',
        'text' => 'Testo post 4'
    ],
    [
        'title' => 'Post 5',
        'author' => 'Simone',
        'text' => 'Testo post 5'
    ],
    [
        'title' => 'Post 6',
        'author' => 'Simone',
        'text' => 'Testo post 6'
    ]
  ],
];

foreach ($posts as $key => $value) {
  echo $key;
  echo "<br>";
  foreach ($value as $post) {
    echo $post['title'];
    echo "<br>";
    echo $post['author'];
    echo "<br>";
    echo $post['text'];
    echo "<br>";
  }
}

?>
