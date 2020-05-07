@extends('layouts.app')

@section('content')

    <div class="container">
        <table class="table">

            <thead class="table">
                <tr>
                    <td><b>Category</b></td>
                    <td><b>Description</b></td>
                    <td>&nbsp</td>
                    <td><a href="/categories/create" class="btn btn-sm btn-outline-info">Add category</a></td>
                </tr>
            </thead>
            <tbody class="table">
                @foreach($categories as $category)
                    <tr>
                        <td><a href="/categories/{{ $category->id }}">{{ $category->name }}</a></td>
                        <td>{{ $category->description }}</td>
                        <td><a href="categories/{{ $category->id }}/edit" class="btn btn-sm btn-outline-secondary">edit</a></td>
                        <td>
                            <form action="categories/{{ $category->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">delete</button>
                            </form>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

@endsection