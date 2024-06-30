<?php

namespace Src\Repository\Tool;

class Tool 
{
    public static function dd(...$vars)
    {
        foreach ($vars as $var) {
            echo "<pre>";
            var_dump($var);
            echo "</pre>";
        }
        die(1);
    }

    public static function dump(...$vars)
    {
        foreach ($vars as $var) {
            echo "<pre>";
            var_dump($var);
            echo "</pre>";
        }
    }
}