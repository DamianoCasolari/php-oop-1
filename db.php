<?php

include __DIR__ . './Models/Movie.php';


$matrix = new Movie('matrix', 'ipsum dolor sit amet consectetur adipisicing elit. Commodi obcaecati ex veniam reprehenderit consequatur cupiditate, harum corporis fugit ducimus cum.', 2023, new Genre('fantasy'));
$titanic = new Movie('Titanic', 'ipsum dolor sit amet consectetur adipisicing elit. Commodi obcaecati ex veniam reprehenderit consequatur cupiditate, harum corporis fugit ducimus cum.', 1999, new Genre('romantic'));

$Movies = [$matrix, $titanic];

// var_dump($Movies[0])


?>