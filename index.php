<?php


class Genre
{

    public $genre;
    public function __construct(string $genre)
    {
        $this->genre = $genre;
    }
}

class Movie
{
    public $title;
    public $description;
    public $year;
    public $newThisYear = false;
    public $genre;


    public function __construct(string $title, string $description, int $year, Genre $genre, string $country = 'usa')
    {
        $this->title = $title;
        $this->description = $description;
        $this->checkyear($year);
        $this->year = $year;
        $this->genre = $genre;

    }


    function checkyear($year)
    {
        if ($year == date('Y')) {
            $this->newThisYear = true;
        }
    }
}

$matrix = new Movie('matrix', 'ipsum dolor sit amet consectetur adipisicing elit. Commodi obcaecati ex veniam reprehenderit consequatur cupiditate, harum corporis fugit ducimus cum.', 2023, new Genre('fantasy'));

var_dump($matrix)



    ?>