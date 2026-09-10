<?php

namespace Astrogoat\ConvertExperience;

use Astrogoat\ConvertExperience\Settings\ConvertExperienceSettings;
use Helix\Lego\Apps\App;
use Helix\Lego\Apps\Services\IncludeFrontendViews;
use Helix\Lego\LegoManager;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ConvertExperienceServiceProvider extends PackageServiceProvider
{
    public function registerApp(App $app)
    {
        return $app
            ->name('convert-experience')
            ->settings(ConvertExperienceSettings::class)
            ->migrations([
                __DIR__ . '/../database/migrations/settings',
            ])->includeFrontendViews(function (IncludeFrontendViews $views) {
                return $views->addToEnd(['convert-experience::script']);
            });
    }

    public function registeringPackage()
    {
        $this->callAfterResolving('lego', function (LegoManager $lego) {
            $lego->registerApp(fn (App $app) => $this->registerApp($app));
        });
    }

    public function configurePackage(Package $package): void
    {
        $package->name('convert-experience')->hasViews()->hasConfigFile();
    }
}
