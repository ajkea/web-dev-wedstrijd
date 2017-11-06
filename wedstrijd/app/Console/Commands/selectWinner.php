<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class selectWinner extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'do:selectWinner';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Select a winner from the competition';

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
        // $winner = DB::table('users')->select('id as user_id','name','answer2','created_at','updated_at')
        // ->whereBetween('created_at',[now(),'2017-11-08'])
        // ->OrderByRaw(ABS('answer2' - 60))
        // ->take('5')
        // ->get();
        // echo $winner;
    }
}
