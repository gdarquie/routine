<?php

namespace App\Model;


class Time
{
    private $value = 0;

    public function calculateTime($value): int
    {
        $time = $value + 1;
        return $time;
    }
}