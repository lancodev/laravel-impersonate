<?php

namespace Lancodev\LaravelImpersonate\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Lancodev\LaravelImpersonate\LaravelImpersonateServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Lancodev\\LaravelImpersonate\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelImpersonateServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-impersonate_table.php.stub';
        $migration->up();
        */
    }
}
