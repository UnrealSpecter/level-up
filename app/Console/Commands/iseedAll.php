<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;

class iseedAll extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'iseed:all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command plugin for iseed to seed all databases except migrations table';

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
    public function handle()
    {
        $query =  \DB::select('SHOW TABLES WHERE Tables_in_levelup NOT LIKE "migrations"');
        $collection = new \Illuminate\Support\Collection($query);
        $tables = $collection->implode('Tables_in_levelup',',');
        $this->info('Calling iseed for all tables except migrations ...');
        $this->call('iseed', [
            "tables" => $tables,
            '--force' => true
        ]);
    }
}
