<?php
require_once('animal.php');

class Ape extends Animal{

    public $legs=4;
    public function yell(){
        return "Auo OOOO";
    }   
}
?>