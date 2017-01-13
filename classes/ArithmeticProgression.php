<?php

/**
 * Class ArithmeticProgression
 */
class ArithmeticProgression extends Progression
{
    /** @var string функция которая будет использоваться для проверки */
    protected $function = 'bcadd';

    protected function validPair($current, $next)
    {
        return $current * 2 == $next;
    }
}