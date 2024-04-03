<?php

use Classes\Property;

class PropertyService {
    public function addHouse(int $houses, Property $property) {
        if($property->getNbHouse() < 4) {
            $property->setNbHouse($property->getNbHouse() + 1);
        } else {
            echo "Nombre de maisons maximales atteint sur cette propriété";
        }
    }

    public function removeHouse(Property $property) {
        if($property->getNbHouse() > 4) {
            $property->setNbHouse($property->getNbHouse() - 1);
        } else {
            echo "Vous n'avez pas de maison sur cette propriété";
        }
    }

    public function addHotel(Property $property) {
        if($property->getHotel() != 0 && $property->getNbHouse() == 4) {
            $property->setNbHouse(0);
            $property->setHotel(true);
        } else {
            echo "Vous ne pouvez pas mettre un hôtel sur cette propriété";
        }
    }

    public function removeHotel(Property $property) {
        if($property->getHotel() == 1) {
            $property->setHotel(false);
        } else {
            echo "Vous n'avez pas d'hôtel sur cette propriété";
        }
    }
}