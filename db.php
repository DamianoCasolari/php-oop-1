<?php

include __DIR__ . './Models/Movie.php';


$matrix = new Movie('matrix 4', 'ipsum dolor sit amet consectetur adipisicing elit. Commodi obcaecati ex veniam reprehenderit consequatur cupiditate, harum corporis fugit ducimus cum.', 2023, new Genre(['fantasy', 'action']));
$titanic = new Movie('Titanic', 'ipsum dolor sit amet consectetur adipisicing elit. Commodi obcaecati ex veniam reprehenderit consequatur cupiditate, harum corporis fugit ducimus cum.', 1999, new Genre(['romantic', 'drammatic']));

$Movies = [$matrix, $titanic];

// var_dump($Movies[0])


?>