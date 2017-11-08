@extends('layouts.app')
@section('content')
<div class="container question">
    <h1>Participation form</h1>
    <h3>Answer those 2 questions and make a chance to win a meet and greet with Kanye West</h3>
    <div class="col-xs-12 col-sm-12 col-md-6">
        <form method="POST" action="">
        {{ csrf_field() }}

        <p>What is the name of Kanye West's' album after graduation?</p>
        <input type="text" name="answer1" id="answer1" value="{{ old('answer1') }}" required>

        <p>How many times does Kanye West say "Kanye" in his song "I love Kanye" ?</p>
        <input type="text" name="answer2" id="answer2" value="{{ old('answer2') }}" required>

        <h5>Now some basic information so we know how to contact you if you win :)</h3>
        <p>Full Name:</p>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        <p>Email:</p>
        <input type="text" name="email" id="email" value="{{ old('email') }}" required>
        <p>Street:</p>
        <input type="text" name="street" id="street" value="{{ old('street') }}" required>
        <p>Number:</p>
        <input type="text" name="streetnumber" id="streetnumber" value="{{ old('streetnumber') }}" required>
        <p>Town:</p>
        <input type="text" name="town" id="town" value="{{ old('town') }}" required>
        <p>Zipcode:</p>
        <input type="text" name="zipcode" id="zipcode" value="{{ old('zipcode') }}" required>
        <button type="submit" value="send" class="btn btn-primary">SEND</button>
        </form>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="column-2 col-xs-12 col-sm-12 col-md-6">
        <img src="https://i.imgur.com/5xthSad.png" alt="Kanye west in crowd">
    </div>
</div>
@endsection