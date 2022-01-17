<?php


class Personnage{
    
    private string $nom;
    private string $race;
    private int $vitalite;
    private int $force;
    private int $agilite;
    private int $intelligence;
    private int $robustesse;

    protected function __construct(string $nom="", string $race="", int $vitalite, int $force, int $agilite, int $intelligence, int $robustesse){
        $this->nom = $nom;
        $this->race = $race;
        $this->vitalite = $vitalite;
        $this->force = $force;
        $this->agilite = $agilite;
        $this->intelligence = $intelligence;
        $this->robustesse = $robustesse;
    }

    
}