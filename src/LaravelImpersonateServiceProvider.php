<?php

namespace Kylekanderson\LaravelImpersonate;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Kylekanderson\LaravelImpersonate\Commands\LaravelImpersonateCommand;

class LaravelImpersonateServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-impersonate')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-impersonate_table')
            ->hasCommand(LaravelImpersonateCommand::class);
    }
}
