<?php
/**
 *
 */

abstract class VarDumper
{
    public static function dump($var)
    {
        CVarDumper::dump($var, 10, true);
    }

}