<?php

namespace WeDevs\ORM\Eloquent\Facades;

use Illuminate\Support\Facades\Facade;
use WeDevs\ORM\Eloquent\Database;

/**
 * @see \Illuminate\Database\DatabaseManager
 * @see \Illuminate\Database\Connection
 */
class DB extends Facade
{
        /**
     * Get the root object behind the facade.
     *
     * @return mixed
     */
    public static function getFacadeRoot()
    {
        return Database::instance();
    }
}