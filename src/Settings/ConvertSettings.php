<?php

namespace Astrogoat\Convert\Settings;

use Helix\Lego\Settings\AppSettings;

class ConvertSettings extends AppSettings
{
    public string $url;

    protected array $rules = [
        'url' => ['required', 'url'],
    ];

    public function description(): string
    {
        return 'Interact with Convert.';
    }

    public static function group(): string
    {
        return 'convert';
    }
}
