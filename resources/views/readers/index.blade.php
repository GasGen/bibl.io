@extends('layouts.app')

@section('content')

    <div class="container">
        <table class="table">

            <thead class="table">
                <tr>
                    <td><b>Reader</b></td>
                    <td>&nbsp</td>
                    <td><a href="/readers/create" class="btn btn-sm btn-outline-info">Add Reader</a></td>
                </tr>
            </thead>
            <tbody class="table">
                @foreach($readers as $reader)
                    <tr>
                        <td><a href="/readers/{{ $reader->id }}">{{ $reader->name }}</a></td>
                        <td><a href="/readers/{{ $reader->id }}/edit" class="btn btn-sm btn-outline-secondary">edit</a></td>
                        <td>
                            <form action="readers/{{ $reader->id }}" method="POST">
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