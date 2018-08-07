<?php

namespace App\Model;

use App\Factory\Creator;

class Character
{
    private $fullName;

    private $description;

    private $routine = []; //en faire un objet à part

    function setRandomFullName() {

        $name = ['Atalaire', 'Barius', 'Nosomo', 'Loma', 'Dol', 'Okita', 'Los', 'Zeris'];

        return $this->fullName = $name[array_rand($name)];
    }

    function setRandomRoutine() {

        $actions = ['Action 1', 'Action 2', 'Action 3'];

        return $this->routine = $actions;
    }

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @param mixed $fullName
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }


    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return array
     */
    public function getRoutine(): array
    {
        return $this->routine;
    }

    /**
     * @param array $routines
     */
    public function setRoutine(array $routine)
    {
        $this->routine = $routine;
    }



}
