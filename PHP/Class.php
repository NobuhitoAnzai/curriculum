<?php
class Animal{
   public $cry="bowbow!";
    
    function bow(){
   echo $this->cry . PHP_EOL;
    }
}

    class Cat extends Animal {
        public $cry = "にゃーにゃー";
    }

    $animal_2 = new Cat();
    $animal_2->bow();
?>