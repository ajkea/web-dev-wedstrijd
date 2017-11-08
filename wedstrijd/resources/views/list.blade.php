@extends('layouts.app')
@section('content')
<div class="container list">
    <div class="row justify-center">
    <h2>Deelnemers die juist antwoorden</h2>
    <form action="{{url('list/export')}}" enctype="multipart/form-data">
        <button class="btn btn-success" type="submit">Export</button>
    </form>
    <table class="table table-dark table-hover">
    <thead>
        <tr>
            <th>Delete</th>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Main answer</th>
            <th>Tiebreaker answer</th>
            <th>IP user</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
    @if(strtolower($user->answer1) === 'graduation') 
    <tr>
        <td class="delete"><a href="list/delete/{{ $user->id }}"><i class="fas fa-times"></i></a></td>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->answer1 }}</td>
        <td>{{ $user->answer2 }}</td>
        <td>{{ $user->IPUser }}</td>
    </tr
    @endif
    @endforeach
    </tbody>
</table>

<h2>Lijst van deelnemers die fout antwoorden:</h2>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Main answer</th>
            <th>Tiebreaker answer</th>
            <th>IP user</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
    @if(strtolower($user->answer1) !== 'graduation') 
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->answer1 }}</td>
        <td>{{ $user->answer2 }}</td>
        <td>{{ $user->IPUser }}</td>
    </tr
    @endif
    @endforeach
    </tbody>
</table>
</div>
</div>
@endsection