@extends('layouts.app')
@section('content')
<div class="container question">
    <div class="col-xs-12 col-sm-12 col-md-6">
        <h1>Participation form</h1>
        <h3>Answer those 2 questions and make a chance to win a meet & greet with Kanye West</h3>
        <form method="POST" action="">
        {{ csrf_field() }}
        
        <h5>Which artist do you want to meet?</h5>
        <input name="artistRadios" type="radio" value="Kanye West">Kanye West
        <input name="artistRadios" type="radio" value="Taylor Swift">Taylor Swift
        <input name="artistRadios" type="radio" value="Coldplay">Coldplay
    
        <h5>What is the name of Kanye West's' album after graduation?</h5>
        <input type="text" name="answer1" id="answer1" value="{{ old('answer1') }}" required>

        <h5>How many times does Kanye West say "Kanye" in his song "I love Kanye" ?</h5>
        <input type="text" name="answer2" id="answer2" value="{{ old('answer2') }}" required>

        <h3>Contact information:</h3>
        <h5>Full Name:</h5>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        <h5>Email:</h5>
        <input type="text" name="email" id="email" value="{{ old('email') }}" required>
        <h5>Street:</h5>
        <input type="text" name="street" id="street" value="{{ old('street') }}" required>
        <h5>Number:</h5>
        <input type="text" name="streetnumber" id="streetnumber" value="{{ old('streetnumber') }}" required>
        <h5>Town:</h5>
        <input type="text" name="town" id="town" value="{{ old('town') }}" required>
        <h5>Zipcode:</h5>
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