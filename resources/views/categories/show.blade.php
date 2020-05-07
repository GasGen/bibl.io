@extends('layouts.app')

@section('content')
<div class="container">

        <form action="#" method="post">
            <table class="table">
                <thead class="table">
                    <tr>
                        <h1 class="mt-2"><b>Category: {{ $category->name }}</b></h1><br>{{ $category->description }}
                    </tr>
                </thead>
                <tbody class="table">
                    <tr>
                       <td>Here will be the books from the category {{ $category->name }}</td>
                    </tr>
                    <tr>
                        @csrf
                        <td> <a href="/categories" class="btn btn-sm btn-outline-secondary mr-2">Back</a> <button type="submit" class="btn btn-sm btn-success">Add book</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
    
    </div>
@endsection('content')