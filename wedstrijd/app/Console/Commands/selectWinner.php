<?php

namespace App\Console\Commands;
use DB;
use Illuminate\Console\Command;
use App\User;

class selectWinner extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'do:selectwinner';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'SelectWinner';

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
        $winner = DB::table('users')->select('id as user_id','name','answer1','answer2','created_at','updated_at')
        ->whereBetween('created_at',[date('Ymd',strtotime('-1 day')),now()])
        ->where(DB::raw('LOWER(answer1)'),'like','graduation')
        ->OrderBy(DB::raw('abs(answer2 -60)'))
        // ->take('5')
        // ->get();
        ->first();
        // echo $winner->user_id;
        DB::table('winners')->insertGetId([
            'user_id' => $winner->user_id,
            // 'name' => $winner->name,
            // 'answer2' => $winner->answer2,
            'created_at' => $winner->created_at,
            'updated_at' => $winner->updated_at,
            // 'period' => '1', //periode = winner_id
        ]);
        echo $winner->user_id;
    }
}
