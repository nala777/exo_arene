<?php

require_once("Personnage.php");

class Voleur extends Personnage{

    public function __construct(string $nom = "", string $race = ""){

        parent::__construct($nom, $race, 16, 10, 5, 8, 16);
        
    }

    public function vol(){
        
    }
}