<?php

namespace Gecche\Multidomain\Tests\App\Console\Commands;

use Illuminate\Console\Command;

class ConfigNameCommand extends Command
{
    protected $signature = 'config-name';

    protected $description = 'Display the application name from the configuration';

    public function handle()
    {
        $this->line(config('app.name'));
    }
}
