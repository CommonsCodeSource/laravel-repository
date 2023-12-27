<?php

namespace CommonsCodeSource\LaravelRepository;

use Illuminate\Support\ServiceProvider;

class PackageNameServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Registrar bindings de repositório e serviço
    }

    public function boot()
    {
        // Registrar comandos do console
        if ($this->app->runningInConsole()) {
            $this->commands([
                // Lista de comandos
            ]);
        }
    }
}