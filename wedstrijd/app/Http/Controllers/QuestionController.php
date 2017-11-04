<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function store(){
        return view('question');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'street' => 'required|string|max:255',
            'streetnumber' => 'required|integer|max:4',
            'town' => 'required|string|max:30',
            'zipcode' => 'required|integer|digits_between:1000,9992',
            'answer1' => 'required|string|max:50',
            'answer2' => 'required|integer',
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'street' => $data['street'],
            'streetnumber' => $data['streetnumber'],
            'town' => $data['town'],
            'zipcode' => $data['zipcode'],
            'answer1' => $data['answer1'],
            'answer2' => $data['answer2'],
            'IPAddress' => \Request::ip(),
        ]);
    }
}
