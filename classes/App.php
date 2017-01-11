<?php

/**
 * Class App
 */
class App
{
    public static function init()
    {
        $files = array(
            'classes/Progression.php',
            'classes/ArithmeticProgression.php',
            'classes/GeometricProgression.php',
        );

        foreach ($files as $file) {
            require_once $file;
        }
    }

    public static function main()
    {
        /** @var array $classes */
        $classes = array(
            'ArithmeticProgression',
            'GeometricProgression',
        );

        /** @var array $sequence */
        $sequence = explode(',', $_SERVER['argv'][1]);

        foreach ($classes as $className) { /** @var string $progression */

            /** @var ArithmeticProgression|GeometricProgression $progression */
            $progression = new $className($sequence);

            if ($progression->isValid()) {
                echo "Последовательность является прогрессией\n";
                return;
            }
        }

        echo "Последовательность не является прогрессией\n";
    }

    private function __construct()
    {
    }
}