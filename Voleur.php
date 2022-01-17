<?php

require_once("Personnage.php");

class Voleur extends Personnage{

    public function __construct(string $nom = "", string $race = ""){

        parent::__construct($nom, $race, 12, 16, 18, 10, 8);
        
    }
}