<?php

declare(strict_types=1);

namespace Exercises\Reverse;

/**
 * Create methods that reverse given input by its positions.
 *
 * @method static int int(int $number)
 * @method static string string(string $string)
 * @example Reverse::int(12) === 21
 * @example Reverse::int(912) === 219
 * @example Reverse::int(120) === 21
 * @example Reverse::int(-12) === -21
 * @example Reverse::int(-120) === -21
 * @example Reverse::string('qwerty')  === 'ytrewq'
 * @example Reverse::string('apple')  === 'elppa'
 */
final class Reverse
{
    public static function int(int $n): int
    {
        $castToString = (string) $n;
        $lengthOfNumber = strlen($castToString);
        $reversedString = '';
        for($i = 0; $i < $lengthOfNumber; $i++){
            $reversedString .= $castToString[$lengthOfNumber - $i -1];
        }

        if($n < 0){
            return (int) $reversedString * -1;
        }
        return (int)$reversedString;
    }

    public static function string(string $string): string
    {
        $lengthOfNumber = strlen($string);
        $reversedString = '';
        for($i = 0; $i < $lengthOfNumber; $i++){
            $reversedString .= $string[$lengthOfNumber - $i -1];
        }
        return $reversedString;
    }
}

// var_dump(Reverse::int(-12));
// var_dump(Reverse::string('mehdi'));