@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Herexamen web back-end</h1>
    <h2>Wat hebben we te doen?</h2>
    
    <form action="todos" method="post">
        <label for="taak">Vul hier je taak in:</label>
        <input type="text" name="todo" placeholder="Geef hier een taak in">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" name="submit" value="submit">
    </form>

    <table class="table table-striped">
            <tr>
            <th>idTaak</th>
            <th>Taak</th>
            <th>idUser</th>
            <th>Verwijderen</th>
            </tr>
        @foreach($allTodo as $key => $taak)
        <tr>
        <td>{{ $taak->idTodo }}</td>
        <td>{{ $taak->todo }}</td>
        <td>{{ $taak->idUser }}</td>
        <td><a href="/todoVerwijderen/{{ $taak->idTodo }}">Verwijder</a></td>
        </tr>
        @endforeach
    </table>
</div>
@endsection