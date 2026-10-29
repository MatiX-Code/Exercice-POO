<?php

class Seance{
    private string $date;
    private string $film;

    public function __construct(string $newDate, string $newFilm){
        $this-> date = $newDate;
        $this -> film = $newFilm;
    }
    public function getDate(): string{
        return $this-> date;
    }
    public function setDate(string $newDate): void{
        $this-> date = $newDate;
    }
    public function getFilm(): string{
        return $this-> film;
    }
    public function setFilm(string $newFilm): void{
        $this-> film = $newFilm;
    }
}

?>