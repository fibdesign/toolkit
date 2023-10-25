<?php

namespace Fibdesign\Toolkit\Providers;
use Illuminate\Support\ServiceProvider;

class ToolkitProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfig();
    }

    public function boot()
    {
        $this->publishConfig();
        $this->publishMigrations();
    }

    private function mergeConfig()
    {
        $path = $this->getConfigPath();
        $this->mergeConfigFrom($path, 'toolkit');
    }
    private function publishConfig()
    {
        $path = $this->getConfigPath();
        $this->publishes([$path => config_path('toolkit.php')], 'toolkit-config');
    }
    private function getConfigPath(): string
    {
        return __DIR__ . '/../config/toolkit.php';
    }

    private function getMigrationsPath(): string
    {
        return __DIR__ . '/../database/migrations/';
    }
    private function publishMigrations():void
    {
        $path = $this->getMigrationsPath();
        $this->publishes([$path => database_path('migrations')], 'toolkit-migrations');
    }

}
