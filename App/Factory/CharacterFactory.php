<?php

namespace App\Factory;

use App\Action\ActionList;
use App\Model\Character;

class CharacterFactory extends Creator
{
    protected function factoryMethod() {
        $character = new Character();
        $character->setRandomFullName();
        $character->setDescription('Un personnage parmi d\'autres');
//        $character->setRandomRoutine();
        $actions = new ActionList();
        $character->setRoutine($actions->createRoutine(12));
        return $character;
    }
}