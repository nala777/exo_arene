<?php

require_once("Personnage.php");

class Voleur extends Personnage{

    public function __construct(string $nom = "", string $race = ""){

        parent::__construct($nom, $race, 14, 14, 10, 8, 10);
        
    }

    public function malusAgi($nom){

    }
}