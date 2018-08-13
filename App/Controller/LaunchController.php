<?php

namespace App\Controller;

use App\Handler\CharacterHandler;
use App\Serializer\CharacterSerializer;

class LaunchController
{

    public function launch()
    {
        $handlerCharacter = new CharacterHandler();
        $characters = $handlerCharacter->createCharacters();
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

}