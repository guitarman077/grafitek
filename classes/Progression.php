<?php

/**
 * Class Progression
 */
abstract class Progression
{
    /** @var array */
    protected $sequence = array();

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
        if (count($this->sequence) === 1) {
            return false;
        }

        while ($current = current($this->sequence)) {

            if (!$next = next($this->sequence)) { // дошли до конца без ошибок
                return true;
            }

            if (!$this->validPair($current, $next)) { // прогрессия не валидна
                return false;
            }
        }
    }

    protected abstract function validPair($current, $next);
}