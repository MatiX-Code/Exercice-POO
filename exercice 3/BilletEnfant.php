<?php

class BilletEnfant{
    private int $age;

    public function __construct(int $newAge){
        $this-> age = $newAge;
    }

    public function getAge(): string{
        return $this-> age;
    }
    public function setAge(int $newAge): void{
        $this-> age = $newAge;
    }

}
?>