<?php

namespace App\Controller;

use App\Factory\CharacterFactory;
use App\Serializer\CharacterSerializer;

class LaunchController
{

    public function launch()
    {
        $characters = $this->createCharacters();
        $logs = [];
        $character = [];

        for ($i = 0;  $i < count($characters); $i++) {

            //convert character object into array
            $serializer = new CharacterSerializer();
            $character = $serializer->serialize($characters[$i]);

            array_push($logs, $character);
        }

        $this->displayLogs($logs);
    }

    /**
     * @param array $logs
     */
    public function displayLogs(array $logs)
    {
        header('Content-Type: application/json');
        echo json_encode($logs);

    }

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

//    /**
//     * @param $character
//     * @return array
//     */
//    public function createRoutines($character) //pour un personnage
//    {
//        $routines = [];
//        for ($i = 0;  $i < 2; $i++)
//        {
//            $routine =  $this->act($character);
//            array_push($routines, $routine);
//        }
//        //une routine = une suite d'action réalisée par un personnage
//
//        return $routines;
//    }
//
//    /**
//     * @param $character
//     * @return string
//     */
//    public function act($character)
//    {
//        return 'Une action est commise par '.$character.'. ';
//    }

}