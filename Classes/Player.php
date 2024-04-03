<?php

namespace Classes;

use Interfaces\InterfacePlayer;
use Config\Config;

class Player implements InterfacePlayer
{

    private $currentCase; // position du joueur sur le plateau
    private $money; // montant du joueur
    private $properties = []; // propriétés du joueur
    private $houses; // nombre de maison 
    private $hotels; // nombre d'hotels
    private $inJail; //bool pour savoir si le joueur est en prison
    private $isBankrupt; // bool pour savoir si le joueur est banqueroute
    private $getOutOfJailCard; // nombre de cartes pour sortir de prison
    private Square $location; // case où est situé le joueur

    public function play(){
        
    }

    public function move(int $number){
        if ($this->currentCase + $number < Config::$cases){
            $this->currentCase += $number;
        } else {
            $this->currentCase += $number - Config::$cases;
            $this->money += Config::$salary;
        }
    }

    public function drawCard(){
        
    }

    public function buy(int $amount /*Property $property*/){
        // $property->setOwner($this);
        // $property->setRent($amount);
        // array_push($properties, $property);
        
    }

    public function sell(int $amount){
        
    }

    public function payRent(int $amount){

    }

    public function buyHouse(int $amount){

    }

    public function sellHouse(int $amount){

    }

    public function buyHotel(int $amount){

    }

    public function sellHotel(int $amount){

    }

    public function checkBankruptcy(): bool{
        return $this->isBankrupt;
    }

    public function checkJail(): bool{
        return $this->inJail;
    }

    public function endTurn(){
        
    }
}