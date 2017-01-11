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

        foreach ($classes as $className) { /** @var string $progression */

            /** @var ArithmeticProgression|GeometricProgression $progression */
            $progression = new $className();

            if ($progression->isValid()) {
                echo "Последовательность является прогрессией";
                return;
            }
        }

        echo "Последовательность не является прогрессией";
    }

    private function __construct()
    {
    }
}