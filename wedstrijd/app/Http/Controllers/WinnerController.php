<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class WinnerController extends Controller
{
    public function index()
    {
        // SELECT winners.winner_id, users.name, users.answer1, users.artist FROM `winners` INNER JOIN users on winners.user_id = users.id 
        $users = \DB::table('winners')
        ->join('users','users.id','=','winners.user_id')
        ->select('winners.winner_id','users.name','users.answer2','users.answer1','users.artist')
        ->whereNull('users.deleted_at')->get();
        
        return view('winner', ['users' => $users]);
    }
}
