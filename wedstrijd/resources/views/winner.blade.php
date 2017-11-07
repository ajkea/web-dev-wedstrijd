@extends('layouts.app')
@section('content')
<table class="table">
    <tr>
        <th>Periode</th>
        <th>Naam winnaar</th>
        <th>Answer main</th>
        <th>Answer tiebreaker</th>
    </tr>
@foreach ($users as $user)
    <tr>
        <td>{{ $user->winner_id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->answer1 }}</td>
        <td>{{ $user->answer2 }}</td>
        </tr
@endforeach
</table>
@endsection