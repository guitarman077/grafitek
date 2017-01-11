<?php

/**
 * Class Progression
 */
abstract class Progression
{
    /** @var array */
    protected $number = array();

    /** @var string функция которая будет использоваться для проверки */
    protected $function;

    public function __construct()
    {

    }

    /**
     * Проверяет валидность прогрессии
     *
     * @return bool
     */
    public function isValid()
    {
        return true;
    }
}