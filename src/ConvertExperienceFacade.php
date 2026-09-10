<?php

namespace Astrogoat\ConvertExperience;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\ConvertExperience\ConvertExperience
 */
class ConvertExperienceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'convert-experience';
    }
}
