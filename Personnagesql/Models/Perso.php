<?php
namespace App\Models;


class Perso{
    private $id;
    private $name;
    private $classe;
    private $race;
    private $statattaque;
    private $statdefense;

    public function __construct(){
        
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function setId($id){
        $this->id=$id;
    }

    public function setName($name){
        $this->name=$name;
    }

    public function getClasse(){
        return $this->classe;
    }

    public function getRace(){
        return $this->race;
    }

    public function setClasse($classe){
        $this->classe=$classe;
    }

    public function setRace($race){
        $this->race=$race;
    }

    public function getStatattaque(){
        return $this->statattaque;
    }

    public function getStatdefense(){
        return $this->statdefense;
    }

    public function setStatattaque($statattaque){
        $this->statattaque=$statattaque;
    }

    public function setStatdefense($statdefense){
        $this->statdefense=$statdefense;
    }

    
}