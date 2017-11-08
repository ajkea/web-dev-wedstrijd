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
        //loop door artiesten om per artiest 1 winnaar te kiezen
        $artists=['Kanye West','Taylor Swift','Coldplay'];
        foreach ($artists as $artist){
        $winner = DB::table('users')->select('id as user_id','name','answer1','answer2','created_at','updated_at','artist')
        ->whereBetween('created_at',[date('Ymd',strtotime('-1 day')),now()])
        ->where(DB::raw('LOWER(answer1)'),'like','graduation')
        ->where('artist','like',$artist)
        ->OrderBy(DB::raw('abs(answer2 -60)'))
        ->whereNull('users.deleted_at')
        ->first();

        DB::table('winners')->insertGetId([
            'user_id' => $winner->user_id,
            'created_at' => $winner->created_at,
            'updated_at' => $winner->updated_at,
        ]);
        }

        $users = User::all();
      \Excel::create('Participants - '.date('dmY'), function($excel) use($users) {
          $excel->sheet('ExportFile', function($sheet) use($users) {
              $sheet->fromArray($users);
          });
      })->store('xls', storage_path('excel/exports'));
    }
}
