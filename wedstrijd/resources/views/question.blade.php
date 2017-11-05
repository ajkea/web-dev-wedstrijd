@include('layouts.app')
    <form class="form-horizontal"  method="POST" action="{{ route('question.create.post') }}">
    {{ csrf_field() }}

    <p>What is the name of Kanye West's' album after graduation?</p>
    <input type="text" name="answer1" id="answer1">

    <p>How many times does Kanye West say "Kanye" in his song "I love Kanye" ?</p>
    <input type="text" name="answer2" id="answer2">

    <h3>Now some basic information so we know how to contact you if you win :)</h3>
    <p>Full Name:</p>
    <input type="text" name="name" id="name">

    <p>Email:</p>
    <input type="text" name="email" id="email">

    <p>Street:</p>
    <input type="text" name="street" id="street">

    <p>Number:</p>
    <input type="text" name="streetnumber" id="streetnumber">

    <p>Town:</p>
    <input type="text" name="town" id="town">

    <p>Zipcode:</p>
    <input type="text" name="zipcode" id="zipcode">

    <button type="submit" value="send" class="btn btn-primary">Send</button>
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