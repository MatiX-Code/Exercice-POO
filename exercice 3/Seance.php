<?php

class Seance{
    private string $date;  
    private string $heure;  
    private Film $film;

    public function __construct(string $newDate, string $newHeure){
        $this-> date = $newDate;
        $this -> heure = $newHeure;

    }
    public function getDate(): string{
        return $this-> date;
    }
    public function setDate(string $newDate): void{
        $this-> date = $newDate;
    }
    public function getHeure(): string{
        return $this-> heure;
    }
    public function setHeure(string $newHeure): void{
        $this-> heure = $newHeure;
    }
    public function getFilm() :Film{
        return $this-> film;
    }
    public function setFilm(Film $newFilm){
        $this-> film =$newFilm;
    }
}

?>