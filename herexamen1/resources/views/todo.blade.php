@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Herexamen web back-end</h1>
    
    <form class="jumbotron" action="todoToevoegen" method="POST">
        <h3>Voeg een nieuwe taak toe</h3>
        <label for="taak">Vul hier je taak in:</label><br>
        <input type="text" name="taak" placeholder="Geef hier een taak in">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" /><br>
        <input type="submit" name="submit" value="submit">
    </form>
    <h2>Todo</h2>
    <table class="table table-striped">
            <tr>
            <th>Te voltooien</th>
            <th>idTaak</th>
            <th>Taak</th>
            <th>Username</th>
            <th>Verwijderen</th>
            </tr>
        @foreach($allTodo as $key => $taak)
        @if($taak->voltooid == 0)
        <tr>
        <td><a href="/todoVoltooid/{{ $taak->idTodo }}">De taak is klaar!</a></td>
        <td>{{ $taak->idTodo }}</td>
        <td>{{ $taak->todo }}</td>
        <td>{{ $taak->name }}</td>
        <td><a href="/todoVerwijderen/{{ $taak->idTodo }}">Verwijder</a></td>
        </tr>
        @endif
        @endforeach
    </table>

    <h2>Done</h2>
        <table class="table table-striped">
            <tr>
            <th>voltooid</th>
            <th>idTaak</th>
            <th>Taak</th>
            <th>idUser</th>
            <th>Verwijderen</th>
            </tr>
        @foreach($allTodo as $key => $taak)
        @if($taak->voltooid == 1)
        <tr>
        <td><a href="/todoBezig/{{ $taak->idTodo }}">Toch nog bezig</a></td>
        <td>{{ $taak->idTodo }}</td>
        <td>{{ $taak->todo }}</td>
        <td>{{ $taak->idUser }}</td>
        <td><a href="/todoVerwijderen/{{ $taak->idTodo }}">Verwijder</a></td>
        </tr>
        @endif
        @endforeach
    </table>

</div>
@endsection