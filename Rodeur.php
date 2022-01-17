<?php

require_once("Personnage.php");

class Voleur extends Personnage{

    public function __construct(string $nom = "", string $race = ""){

        parent::__construct($nom, $race, 10, 16, 13, 9, 9);
        
    }

    public function puissance(){
        
    }
}