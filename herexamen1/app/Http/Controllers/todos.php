<?php

namespace App\Http\Controllers;

use Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

use App\todo;

class todos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $todo = new Todo();
        $allTodo = $todo->ophalenTodo($id);

        return view('todo',['allTodo' => $allTodo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userId = Auth::id();
        $taak = Input::get("taak");
        $todo = new Todo();
        $todo->toevoegenTodo($taak,$userId);
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        $todo = new Todo();
        $todo->wijzigenTodo($id);
        return redirect()->back()->with('message', 'de taak is klaar');
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
    public function updateVoltooid($id)
    {
        $todo = new Todo();
        $todo->wijzigenTodo($id);
        return redirect()->back();
    }


    public function updateTodo($id)
    {
        $todo = new Todo();
        $todo->wijzigenTodoBezig($id);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = new Todo();
        $todo->verwijderenTodo($id);
        return redirect()->back()->with('message', 'de taak is verwijderd');
    }
}
