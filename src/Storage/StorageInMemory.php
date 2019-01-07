<?php

namespace Bpartner\Storage;

use Bpartner\Storage\Interfaces\MemoryStore;

class StorageInMemory extends MemoryStore
{

    /**
     * @param $key
     * @param $value
     * @return void
     */
    public static function setParam($key, $value)
    {
        static::$param[$key] = $value;
    }

    /**
     * @param $param
     * @return mixed
     */
    public static function getParam($param)
    {
        return static::$param[$param];
    }
}
