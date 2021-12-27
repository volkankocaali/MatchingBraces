<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'app/InputFactory.php';
require 'app/Input.php';
require 'app/MatchingBracesHelper.php';

use App\InputFactory;
use App\MatchingBracesHelper;
use App\InputFactoryInterface;
use App\InputInterface;

$string = "{{{}[]}}";
$stringFail = "{[]{}(})";

$create = InputFactory::create($string);
$match = MatchingBracesHelper::check($create);

print_r($match);
