@extends('layouts.app')

@section('content')
    <div class="container">

        <form action="/readers" method="post">
            <table class="table">
                <thead class="table">
                    <tr>
                        <td><b>Add a reader</b></td>
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
                    <tr>
                        <td><input type="email" name="email" id="email" class="form-control" placeholder="email@email.com"></td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password" id="password" class="form-control" placeholder="password"></td>
                    </tr>
                    <tr>
                        <td><input type="date" name="birth" id="birth" class="form-control" placeholder="birth"></td>
                    </tr>
                    <tr>
                        @csrf
                        <td> <a href="/readers" class="btn btn-sm btn-outline-secondary mr-2">Back</a><button type="submit" class="btn btn-sm btn-success">Add reader</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
    
    </div>
@endsection