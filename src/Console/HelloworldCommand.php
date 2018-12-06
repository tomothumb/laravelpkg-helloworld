<?php

namespace Tomothumb\LaravelpkgHelloworld\Console;

use Illuminate\Console\Command;
use Tomothumb\LaravelpkgHelloworld\Contracts\HelloworldContracts;

class HelloworldCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravelpkg-helloworld:helloworld';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sample command of development package.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(HelloworldContracts $service_sample)
    {
        // Facade
        $message = \HelloworldFacade::getMessage();
        // DI
        $message .= $service_sample->getMessage();
        $this->info($message . " Hello World! [info]");
        $this->error($message . " Hello World! [error]");
        $this->alert($message . " Hello World! [alert]");
        $this->comment($message . " Hello World! [comment]");
        $this->warn($message . " Hello World! [warn]");
        $this->table(["Heading 1", "Heading b"], [["Hello1", $message." World1"], ["Hello2", $message. " World2"]]);
        $this->info("This is output form a sample command of development package.");
    }

}
