<?php

/**
 * Class Progression
 */
abstract class Progression
{
    /** @var array */
    protected $sequence = array();

    /**
     * Progression constructor.
     *
     * @param $sequence
     */
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

            $next = next($this->sequence);

            if ($next === false) { // дошли до конца без ошибок
                return true;
            }

            if (!$this->validPair($current, $next)) { // прогрессия не валидна
                return false;
            }
        }
    }

    /**
     * @param $current
     * @param $next
     *
     * @return mixed
     */
    protected abstract function validPair($current, $next);
}