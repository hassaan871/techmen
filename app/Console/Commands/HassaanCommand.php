<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Console\Concerns\PromptsForMissingInput;

class HassaanCommand extends Command 
{
    use  PromptsForMissingInput;

    protected $promptsForMissingArguments = true; 
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:hassaan-command {name} {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is Hassaans Personal Command';

    public function promptForMissingArgumentsUsing()
    {
        return [
            'name' => fn() => $this->ask('User name'),
            'email' => fn() => $this->ask('User Email')
        ];
    }


    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Hello World');
    }
}
