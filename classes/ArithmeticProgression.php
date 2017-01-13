<?php

/**
 * Class ArithmeticProgression
 */
class ArithmeticProgression extends Progression
{
    protected function validPair($current, $next)
    {
        echo "ar\n";

        return $current * 2 == $next;
    }
}