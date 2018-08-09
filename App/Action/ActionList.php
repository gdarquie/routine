<?php

namespace App\Action;

class ActionList
{

    public function selectAction($action)
    {
        return $this->$action();
    }

    public function createRoutine($Actioncount)
    {
        $actionsList = [
            'walk',
            'eat',
            'sleep',
            'work',
            'wait',
            'read',
            'meet',
            'kill'
        ];

        $routine = [];

        for ($i = 0; $i< $Actioncount; $i++){
            array_push($routine, $this->selectAction($actionsList[array_rand($actionsList)]));
        }

        return $routine;
    }

    public function walk()
    {
        return 'Le personnage marche';
    }

    public function eat()
    {
        return 'Le personnage mange';
    }

    public function sleep()
    {
        return 'Le personnage dort';
    }

    public function work()
    {
        return 'Le personnage travaille';
    }

    public function wait()
    {
        return 'Le personnage attend';
    }

    public function read()
    {
        return 'Le personnage lit';
    }

    public function meet()
    {
        return 'Le personnage rencontre un autre personnage';
    }

    public function kill()
    {
        return 'Le personnage tue un autre personnage';
    }
}