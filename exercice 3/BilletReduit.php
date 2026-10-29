<?php

class BilletReduit{
    private int $justificatif;

    public function __construct(int $newJustificatif){
        $this-> justificatif = $newJustificatif;
    }

    public function getJustificatif(): string{
        return $this-> justificatif;
    }
    public function setJustificatif(int $newJustificatif): void{
        $this-> justificatif = $newJustificatif;
    }
}
?>