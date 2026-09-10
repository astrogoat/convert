<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateConvertExperienceSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('convert-experience.enabled', false);
        $this->migrator->add('convert-experience.url', 'https://acsbapp.com/apps/app/dist/js/app.js');
    }

    public function down()
    {
        $this->migrator->delete('convert-experience.enabled');
        $this->migrator->delete('convert-experience.url');
    }
}
