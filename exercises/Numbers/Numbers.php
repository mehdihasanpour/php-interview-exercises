<?php

declare(strict_types=1);

namespace Exercises\Numbers;

/**
 * @method static int add(int $n) add numbers from 1 up to $n including.
 * @example Numbers::add(3) === 6
 */
final class Numbers
{
    public static function add(int $n): int
    {
        $sum = 0;
        for($i=1; $i<=$n; $i++){
            $sum += $i;
        }
        return $sum;
    }
}

var_dump(Numbers::add(3));
