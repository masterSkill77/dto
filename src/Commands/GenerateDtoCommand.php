<?php

namespace Masterskill\Dto\Commands;

use Illuminate\Console\Command;

class GenerateDtoCommand extends Command
{
    public $signature = 'make:dto {--r|request} {--m|model}';

    public $description = "Create a new dto class";

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
