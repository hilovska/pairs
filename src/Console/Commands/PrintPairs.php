<?php

namespace Hilovska\Pairs\Console\Commands;

use Illuminate\Console\Command;
use Hilovska\Pairs\Service\Pairs;

class PrintPairs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pairs:print {args*} {--U|unique_args : Whether repeating args should be used only once}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Print pairs from all args without repeating';

    /**
     * @var Pairs
     */
    protected $pairs;

    /**
     * Create a new command instance.
     *
     * @param  Pairs  $pairs
     * @return void
     */
    public function __construct(Pairs $pairs)
    {
        parent::__construct();

        $this->pairs = $pairs;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        try {
            $pairs = $this->pairs->getPairs($this->argument('args'), $this->option('unique_args'));
            foreach ($pairs as $pair) {
                $this->info($pair);
            }
        }
        catch(\Exception $e) {
            $this->error($e->getMessage());
        }
    }
}
