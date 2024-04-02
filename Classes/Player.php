<?php

namespace Classes;

use Interfaces\InterfacePlayer;

class Player implements InterfacePlayer
{

    public $currentCase; // position du joueur sur le plateau
    public $money; // montant du joueur
    public $properties; // propriétés du joueur
    public $houses; // nombre de maison 
    public $hotels; // nombre d'hotels
    public $inJail; //bool pour savoir si le joueur est en prison
    public $isBankrupt; // bool pour savoir si le joueur est banqueroute
    public $getOutOfJailCard; // nombre de cartes pour sortir de prison

    public function play(){
        
    }

    public function move(){

    }

    public function drawCard(){
        
    }

    public function buy(int $amount){

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
        if($this->money < 0){
            return true;
        }
        return false;
    }

    public function checkJail(): bool{

        return false;
    }

    public function endTurn(){
        
    }
}