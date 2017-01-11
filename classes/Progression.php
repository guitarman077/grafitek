<?php

/**
 * Class Progression
 */
abstract class Progression
{
    /** @var array */
    protected $sequence = array();

    /** @var string функция которая будет использоваться для проверки */
    protected $function;

    public function __construct($sequence)
    {
        $this->sequence = $sequence;
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