@extends('layouts.app')

@section('content')

    <div class="container">

        <table class="table">
            <thead class="table">
                <tr><td><h1>MENU</h1></td></tr>
            </thead>
            <tbody class="table text-center">
                <tr>
                    <td><h2><a href="/authors" class="btn btn-block btn-outline-dark">AUTHORS</a></h2></td>
                </tr>
                <tr>
                    <td><h2><a href="/books" class="btn btn-block btn-outline-dark">BOOKS</a></h2></td>
                </tr>
                <tr>
                    <td><h2><a href="/categories" class="btn btn-block btn-outline-dark">CATEGORIES</a></h2></td>
                </tr>
                <tr>
                    <td><h2><a href="/readers" class="btn btn-block btn-outline-dark ">READERS</a></h2></td>
                </tr>
            </tbody>
        </table>
    
    </div>

@endsection