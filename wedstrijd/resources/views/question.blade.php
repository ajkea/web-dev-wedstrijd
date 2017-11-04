<div class="questionpage col-md-12 text-center">
    <form class="form-horizontal" method="POST" action="/">
    {{ csrf_field() }}

    <p>What is the name of Kanye West's' album after graduation?</p>
    <input type="text" name="answer1" id="answer1">

    <p>How many times does Kanye West say "Kanye" in his song "I love Kanye" ?</p>
    <input type="text" name="answer2" id="answer2">

    <h3>Now some basic information so we know how to contact you if you win :)</h3>
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <p>Email:</p>
        <input type="text" name="album" id="album">
    </div>

    <p>Street:</p>
    <input type="text" name="street" id="street">

    <p>Number:</p>
    <input type="text" name="streetnumber" id="streetnumber">

    <p>Town:</p>
    <input type="text" name="town" id="town">

    <p>Zipcode:</p>
    <input type="text" name="zipcode" id="zipcode">

    <input type="button" value="send">
</form>
</div>