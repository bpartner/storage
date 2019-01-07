<?php

namespace Bpartner\Storage\Interfaces;

/**
 * Interface Store
 * @package Interfaces
 */
interface Store
{
    /**
     * @param $key
     * @param $value
     * @return void
     */
    public static function setParam($key, $value);

    /**
     * @param $param
     * @return mixed
     */
    public static function getParam($param);

    /**
     * @return array
     */
    public static function getAll();
}
