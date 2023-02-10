<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*additional import in here(updates here)*/
 
use Illuminate\Support\Facades\Validator;
use App\Models\Todo;

 /**end additional import*/

 class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $todos = todo::all();
        return view('todo', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validator of error when submiting no data entered in placeholder
        //validator when submitted successfully to database and notification that it has been submitted
        //public view found in default.blade.php
        $validator = Validator::make($request->all(), [
            'title' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->route('todos.index')->withErrors($validator);
        }

        Todo::create([
            'title' => $request->get('title')
        ]);

        return redirect()->route('todos.index')->with('success', 'Sales save successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
