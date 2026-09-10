<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateConvertSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('convert.enabled', false);
        $this->migrator->add('convert.url', '');
    }

    public function down()
    {
        $this->migrator->delete('convert.enabled');
        $this->migrator->delete('convert.url');
    }
}
