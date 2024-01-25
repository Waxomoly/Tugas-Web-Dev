
<?php
    class Animal{
        protected $name;
        protected $legs = 4, $cold_blooded = "no";
        public function __construct($animalName){
            $this->name = $animalName;
        }

        //methods
        public function get_name(){
            return $this->name;
        }

        public function get_legs(){
            return $this->legs;
        }

        public function get_cold_blooded(){
            return $this->cold_blooded;
        }
    }
?>
