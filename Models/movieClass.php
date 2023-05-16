<?php

include __DIR__ . './genreClass.php';


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

?>