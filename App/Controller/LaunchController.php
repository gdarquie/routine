<?php

namespace App\Controller;

use App\Model\Character;
use App\Model\Logger;
use \App\Model\Time;

class LaunchController
{

//    public function test()
//    {
//
//        $time = new Time();
//        $time->calculateTime(0);
//
//        $logger = new Logger();
////        echo $logger->monitore();
//
//        return ['controller'];
//    }


    /**
     * @param array $logs
     */
    public function displayLogs(array $logs)
    {
        foreach($logs as $log) {
            print $log.' ';
        }

    }

//    /**
//     * @param $characters
//     * @return array
//     */
//    public function displayCharacters($characters) :array
//    {
//        $logs = $characters;
//        return $logs;
//    }

    /**
     * @return array
     */
    public function createCharacters() :array
    {
        $characters = [];

        $characters[0]= 'Okita';
        $characters[1]= 'Atalaire';

        return $characters;
    }

    public function launch()
    {
        $this->displayLogs($this->createCharacters());
    }

    public function createRoutine()
    {
        //une routine = une suite d'action réalisée par un personnage
    }

    public function displayRoutine(Character $character)
    {
        //retourne la Routine d'un personnage
        //en fait, on affiche pas de logs mais des routines de personnages...?
        // un générateur de routine
    }


}