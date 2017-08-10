@extends('layouts.app')
@section('content')
            <div class="container">
            @auth
                <div class="alert alert-success fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    Goed gedaan, je hebt je kunnen aanmelden!
                </div>
            <h1>Herexamen web back-end</h1>
            <h2>Hendrik Van Dijck</h2>
            
            @endauth
            </div>
        </div>
@endsection