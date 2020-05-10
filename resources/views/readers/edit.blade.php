@extends('layouts.app')

@section('content')
    <div class="container">

        <form action="/readers/{{ $reader->id }}" method="post">
            @method('PUT')
            <table class="table">
                <thead class="table">
                    <tr>
                        <td><b>Edit reader: {{ $reader->name }}</b></td>
                    </tr>
                    @if($errors->all())
                        <tr>
                            <td>
                                <div class="alert alert-danger">

                                    @foreach($errors->all() as $error)
                                        <ul>
                                            <li>{{ $error }}</li>
                                        </ul>
                                    @endforeach
                                </div>
                            </td>
                        </tr>
                    @endif
                </thead>
                <tbody class="table">
                    <tr>
                        <td><input type="text" name="name" id="name" class="form-control" placeholder="Name"></td>
                    </tr>
                    <!--<tr>
                        <td><input type="text" name="surname" id="surname" class="form-control" placeholder="Surname"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="country" id="country" class="form-control" placeholder="country"></td>
                    </tr>
                    <tr>
                        <td><textarea name="extract" id="extract" class="form-control" placeholder="extract"></textarea></td>
                    </tr>
                    <tr>-->
                        <td><input type="date" name="birth" id="birth" class="form-control" placeholder="birth"></td>
                    </tr>
                    <tr>
                        @csrf
                        <td> <a href="/readers" class="btn btn-sm btn-outline-secondary mr-2">Back</a> <button type="submit" class="btn btn-sm btn-success">Edit reader</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
    
    </div>
@endsection