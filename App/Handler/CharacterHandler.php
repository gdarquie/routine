<?php

namespace App\Handler;

use App\Factory\CharacterFactory;

Class CharacterHandler
{
    /**
     * @return array
     */
    public function createCharacters() :array
    {

        $factory = new CharacterFactory();
        $characters = [];

        for ($i = 0;  $i < 100; $i++) {
            array_push($characters, $factory->startFactory());
        }

        return $characters;
    }

}