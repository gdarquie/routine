<?php

namespace App\Factory;

use App\Model\Character;

class CharacterFactory extends Creator
{
    protected function factoryMethod() {
        $character = new Character();
        $character->setRandomFullName();
        $character->setDescription('Un personnage parmi d\'autres');
        $character->setRandomRoutine();
        return $character;
    }
}