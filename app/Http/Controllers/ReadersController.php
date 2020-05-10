<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reader;
use App\User;

class ReadersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $readers = Reader::all();
        return view('readers.index', [
            'readers'=>$readers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('readers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();

        $validate = $request->validate([
            'name'=>'required',
            'password'=>'required',
            'email'=>'required',
            'birth'=>'required'
        ]);

        $user->name = $validate['name'];
        $user->email = $validate['email'];
        $user->password = bcrypt($validate['password']);

        $user->save();
        
        $reader = new Reader();
        $user_reader = User::where('email', $validate['email'])->first();

        $reader->name = $validate['name'];
        $reader->user_id = $user_reader->id;
        $reader->birth = $validate['birth'];
        
        $reader->save();
        
        return redirect('/readers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reader = Reader::findOrFail($id);

        return view('readers.show', [
            'reader'=>$reader
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reader = Reader::findOrFail($id);

        return view('readers.edit', [
            'reader'=>$reader
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reader = Reader::findOrFail($id);

        $validate = $request->validate([
            'name'=>'required',
            'birth'=>'required',
        ]);

        $reader->name = $validate['name'];
        $reader->birth = $validate['birth'];

        $reader->save();

        return redirect('/readers');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reader = Reader::findOrFail($id);

        $reader->delete();

        return redirect('/readers');
    }
}
