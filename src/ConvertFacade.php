<?php

namespace Astrogoat\Convert;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\Convert\Convert
 */
class ConvertFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'convert';
    }
}
