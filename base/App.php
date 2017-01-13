<?php

/**
 * Class App
 */
abstract class App
{
    public static function init()
    {
        $files = array(
            'classes/abstract/Progression.php',
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

        /** @var string $msg */
        $msg = "Последовательность не является прогрессией";

        foreach ($classes as $className) { /** @var string $progression */

            /** @var ArithmeticProgression|GeometricProgression $progression */
            $progression = new $className($sequence);

            if ($progression->isValid()) {

                $msg = "Последовательность является прогрессией";
                break;
            }
        }

        echo $msg . "\n";
    }
}