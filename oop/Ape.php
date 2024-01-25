<?php

    class Ape extends Animal{
        public function __construct($animalName){
            parent::__construct($animalName);
            $this->legs = 2;
        }
         public function yell(){
            echo "Auooo";
         }
    }

?>