@extends('layouts.app')
@section('content')
            <div class="container">
           <div class="extra error-page text-center">
    <h2>Oops!</h2>
    <h1 class="errorcode"> 404 </h1>
    <h1>Not Found</h1>
    <div class="error-details">
        Sorry, an error has occured. Requested page not found!
    </div>

    <div class="error-actions">
        <a href="{{url('/')}}" class="btn btn-primary btn-lg">Return to home</a>
    </div>
</div>

            </div>
@endsection