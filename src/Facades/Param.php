<?php

namespace ArdaGnsrn\Param\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ArdaGnsrn\Param\Param
 */
class Param extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \ArdaGnsrn\Param\Param::class;
    }
}
