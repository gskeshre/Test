<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\user_data_model;

class SendMessage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'guru';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Hello Msg';

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
        
        $req = user_data_model::pluck("name");
        
        echo (($req));
         
    }
}
