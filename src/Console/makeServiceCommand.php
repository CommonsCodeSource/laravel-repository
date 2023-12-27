<?php

namespace CommonsCodeSource\LaravelRepository\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class DebugCommand extends Command
{
    protected $signature = 'make:service {serviceDomain} {serviceName}';

    protected $description = 'Create a new service';

    public function handle(): void
    {
        try {
            
        } catch (\Exception $exception) {
            $this->error('Message: ' . $exception->getMessage());
            $this->error('Code: ' . $exception->getCode());
            $this->error('File: ' . $exception->getFile());
            $this->error('Line: ' . $exception->getLine());
        }
    }

}
