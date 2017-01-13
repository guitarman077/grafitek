<?php

/**
 * Class ArithmeticProgression
 */
class ArithmeticProgression extends Progression
{
    protected function validPair($current, $next)
    {
        return $current * 2 == $next;
    }
}