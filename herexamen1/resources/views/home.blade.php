@extends('layouts.app')
@section('content')
            <div class="container">
            @auth
            <h1>Herexamen web back-end</h1>
            <h2>Hendrik Van Dijck</h2>
            <p class="btn btn-success">
                Goed gedaan, je hebt je kunnen aanmelden!
            </p>
            @endauth
            </div>
        </div>
@endsection