<?php

namespace App\Serializer;

class CharacterSerializer
{
    public function serialize($data)
    {
        $character = [];
        $character['fullName'] = $data->getFullName();
        $character['description'] = $data->getDescription();
        $character['routine'] = $data->getRoutine();

        return $character;
    }
}