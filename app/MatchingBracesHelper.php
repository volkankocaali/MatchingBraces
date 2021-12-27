<?php 

namespace App;

use App\MatchingBracesHelper;

class MatchingBracesHelper {

   static function check($input) {

    $expression = $input->getString();

    static $braces = [
        '(' => ')',
        '{' => '}',
        '[' => ']'
    ];
    $stack = [];
    $state = null;

    for ($i = 0, $length = strlen($expression); $i < $length; $i++) {
        $char = $expression[$i];

        if (isset($braces[$char])) {
            $stack[] = $state = $char;
        } else if ($state && $char == $braces[$state]) {
            array_pop($stack);
            $state = end($stack);
        } else {
            return false;
        }
    }

    return count($stack) == 0 ? 'Başarılı' : 'Başarısız';
   }

}
