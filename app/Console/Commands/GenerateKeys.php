<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateKeys extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'passport:static_keys';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'generate  keys from env';

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
        dump();
        file_put_contents(storage_path('oauth-public.key'), config('app.passport_public_key'));
        file_put_contents(storage_path('oauth-private.key'), config('app.passport_private_key'));
    }
}
