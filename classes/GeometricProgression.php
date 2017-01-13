<?php

/**
 * Class GeometricProgression
 */
class GeometricProgression extends Progression
{
    protected function validPair($current, $next)
    {
        return $current * $current == $next;
    }
}