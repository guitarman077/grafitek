<?php

/**
 * Class GeometricProgression
 */
class GeometricProgression extends Progression
{
    protected function validPair($current, $next)
    {
        echo "geo\n";

        return $current * $current == $next;
    }
}