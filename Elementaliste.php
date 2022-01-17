<?php

require_once("Personnage.php");

class Voleur extends Personnage{

    public function __construct(string $nom = "", string $race = ""){

        parent::__construct($nom, $race, 10, 7, 12, 17, 8);
        
    }

    public function buffIntel(){
        
    }
}