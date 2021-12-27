<?php

namespace App;

use App\Input;
use App\MatchingBracesHelper;

class InputFactory
{
    public static function create($string)
    {
        return new Input($string);
    }
}