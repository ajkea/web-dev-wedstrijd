<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        
        $users = \DB::table('users')->get();
        
        return view('list', ['users' => $users]);
    }

    public function create(){
        return view('question');
    }

    public function validation(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|unique:users,email|max:80|unique:users',
            'street' => 'required|string|max:50',
            'streetnumber' => 'required|integer|between:1,999',
            'town' => 'required|string|max:30',
            'zipcode' => 'required|integer|between:1000,9992',
            'answer1' => 'required|string|max:50',
            'answer2' => 'required|integer',
        ]);
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
            'name' => 'required|string|max:50',
            'email' => 'required|email|unique:users,email|max:80|unique:users',
            'street' => 'required|string|max:50',
            'streetnumber' => 'required|integer|between:1,999',
            'town' => 'required|string|max:30',
            'zipcode' => 'required|integer|between:1000,9992',
            'answer1' => 'required|string|max:50',
            'answer2' => 'required|integer',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->street = $request->street;
        $user->streetnumber = $request->streetnumber;
        $user->town = $request->town;
        $user->zipcode = $request->zipcode;
        $user->answer1 = $request->answer1;
        $user->answer2 = $request->answer2;
        $user->IPUser = \Request::ip();
        $user->save();

        return view('question');
    }
}
