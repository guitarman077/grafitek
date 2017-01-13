<?php

/**
 * Class GeometricProgression
 */
class GeometricProgression extends Progression
{
    /** @var string функция которая будет использоваться для проверки */
    protected $function = 'bcmul';

    protected function validPair($current, $next)
    {
        return $current * $current == $next;
    }
}