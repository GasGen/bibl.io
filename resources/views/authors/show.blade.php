@extends('layouts.app')

@section('content')
<div class="container">

        <form action="#" method="post">
            <table class="table">
                <thead class="table">
                    <tr>
                        <td><h1 class="mt-2"><b>Author: {{ $author->name }} {{ $author->surname }} </b></h1><br>
                        <b>Birth:</b> {{ $author->birth }}, <b>Death:</b> {{ $author->death }}<br>
                        {{ $author->extract }}
                        </td>
                    </tr>
                </thead>
                <tbody class="table">
                    <tr>
                       <td>Here will be the books from of the author {{ $author->name }}</td>
                    </tr>
                    <tr>
                        @csrf
                        <td> <a href="/authors" class="btn btn-sm btn-outline-secondary mr-2">Back</a> <button type="submit" class="btn btn-sm btn-success">Add book</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
    
    </div>
@endsection('content')