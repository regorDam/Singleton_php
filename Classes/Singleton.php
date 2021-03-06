<?php
/**
 * Created by PhpStorm.
 * User: Regor
 * Date: 14/12/16
 * Time: 16:22
 */

namespace Core;

abstract class Singleton
{
    private static $instance = null;

    private function __construct()
    {}

    public static  function Instance()
    {
        if(self::$instance == null)
        {
            self::$instance = new static();
        }

        return self::$instance;
    }

} 