<?php

namespace Bpartner\Storage\Interfaces;

abstract class MemoryStore implements Store
{
    /**
     * @var array
     */
    protected static $param;
    /**
     * @param $key
     * @param $value
     * @return void
     */
    abstract public static function setParam($key, $value);

    /**
     * @param $param
     * @return mixed
     */
    abstract public static function getParam($param);

    /**
     * Get all parameters in array
     * @return array
     */
    public static function getAll()
    {
        return static::$param;
    }
}
