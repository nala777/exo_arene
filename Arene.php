<?php

class Arene{
    
    private array $fighters = [];
    
    public function ajouter(Personnage $personnage){
        array_push($this->fighters, $personnage);
    }

    public function compter(){
        echo "Et voilà le nombre de participant qu'il y aura dans notre arène , ils sauront au nombre de : " . count($this->$fighters) . " pour ce combat ! ";
    }

    

}