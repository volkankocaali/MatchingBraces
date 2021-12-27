<?php

namespace App;

use App\InputInterface;

class Input
{

    private $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function getString()
    {
        return $this->string;
    }
}