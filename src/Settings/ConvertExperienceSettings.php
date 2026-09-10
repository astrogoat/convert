<?php

namespace Astrogoat\ConvertExperience\Settings;

use Helix\Lego\Settings\AppSettings;

class ConvertExperienceSettings extends AppSettings
{
    public string $url;

    protected array $rules = [
        'url' => ['required', 'url'],
    ];

    public function description(): string
    {
        return 'Interact with ConvertExperience.';
    }
}
