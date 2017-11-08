@extends('layouts.app')
@section('content')
    <h1>Winners competition:</h1>
    <div class="artist-winners">
    <h2>Coldplay</h2>
<table class="table table-dark">
    <tr>
        <th>Periode</th>
        <th>Naam winnaar</th>
        <th>Answer main</th>
        <th>Answer tiebreaker</th>
        <th>Artist</th>
    </tr>
@foreach ($users as $user)
@if($user->artist == 'Coldplay')
    <tr>
        <td>{{ ceil($user->winner_id/3) }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->answer1 }}</td>
        <td>{{ $user->answer2 }}</td>
        <td>{{ $user->artist }}</td>
    </tr
@endif
@endforeach
</table>
</div>
<div class="artist-winners">
<h2>Taylor Swift</h2>
<table class="table table-dark">
    <tr>
        <th>Periode</th>
        <th>Naam winnaar</th>
        <th>Answer main</th>
        <th>Answer tiebreaker</th>
        <th>Artist</th>
    </tr>
@foreach ($users as $user)
@if($user->artist == 'Taylor Swift')
    <tr>
        <td>{{ ceil($user->winner_id/3) }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->answer1 }}</td>
        <td>{{ $user->answer2 }}</td>
        <td>{{ $user->artist }}</td>
    </tr
@endif
@endforeach
</table>
</div>
<div class="artist-winners">
<h2>Kanye West</h2>
<table class="table table-dark">
    <tr>
        <th>Periode</th>
        <th>Naam winnaar</th>
        <th>Answer main</th>
        <th>Answer tiebreaker</th>
        <th>Artist</th>
    </tr>
@foreach ($users as $user)
@if($user->artist == 'Kanye West')
    <tr>
        <td>{{ ceil($user->winner_id/3) }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->answer1 }}</td>
        <td>{{ $user->answer2 }}</td>
        <td>{{ $user->artist }}</td>
    </tr
@endif
@endforeach
</div>
@endsection