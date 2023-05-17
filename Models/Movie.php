<?php

include __DIR__ . './Genre.php';


class Movie
{
    public $title;
    public $description;
    public $year;
    public $newThisYear = false;
    public $genres = [];
    public $country;


    public function __construct(string $title, string $description, int $year, Genre $genres, string $country = 'usa')
    {
        $this->title = $title;
        $this->description = $description;
        $this->checkyear($year);
        $this->year = $year;
        $this->genres = $genres;
        $this->country = $country;

    }


    function checkyear($year)
    {
        if ($year == date('Y')) {
            $this->newThisYear = true;
        }
    }
}

?>