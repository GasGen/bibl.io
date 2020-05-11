@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="/search" method="post">
            @csrf
            <input class="form-control" type="text" name="search" placeholder="Search" aria-label="Search">
        </form>
    </div>

@endsection