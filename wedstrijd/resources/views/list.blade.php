@include('layouts.app')
<div class="container">
    <div class="row justify-center">
    <h2>Deelnemers die juist antwoorden</h2>
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
    @if($user->answer1 == 'Graduation') 
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
    @if($user->answer1 !== 'Graduation') 
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