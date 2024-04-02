<?php

namespace Classes;

use Interfaces\InterfaceBank;
use Config\Config;

class Bank implements InterfaceBank
{

    public $cash;
    public $houses;
    public $hotels;

    public function __construct()
    {
        $this->cash = Config::$cash;
        $this->houses = Config::$houses;
        $this->hotels = Config::$hotels;
    }

    public function cashout(int $amount): bool
    {
        if($amount > $this->cash || $amount <= 0){
            return false;
        }

        $this->cash -= $amount;
        return true;
    }

    public function cashin(int $amount): bool
    {
        if( ($amount + $this->cash) > 20580){
            return false;
        }

        $this->cash += $amount;
        return true;
    }

    public function giveHouse()
    {
        if($this->houses <= 0){
            return false;
        }

        $this->houses--;
        return true;
    }

    public function takeHouse()
    {
        if($this->houses >= Config::$houses){
            return false;
        }

        $this->houses++;
        return true;
    }

    public function giveHotel()
    {
        if($this->hotels <= 0){
            return false;
        }
        
        $this->hotels--;
        return true;
    }

    public function takeHotel()
    {
        if($this->houses >= Config::$hotels){
            return false;
        }

        $this->hotels++;
        return true;
    }
}