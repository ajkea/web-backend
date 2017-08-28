<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use DB;

class todo extends Model
{
    protected $fillable = ['todo'];

    public function ophalenTodo($id)
    {
        return DB::table('todos')
        ->join('users', 'todos.idUser','=','users.id')
        ->select('todos.*','users.name')
        ->where('idUser',$id)
        ->get();
    }

    public function toevoegenTodo($taak,$userId)
    {
        return DB::table('todos')
        ->insert(['todo' => $taak, 'idUser' => $userId]);
    }

    public function wijzigenTodo($id)
    {
        return DB::table('todos')
        ->where('idTodo',$id)
        ->update(['voltooid' => TRUE]);
    }

    public function wijzigenTodoBezig($id)
    {
        return DB::table('todos')
        ->where('idTodo',$id)
        ->update(['voltooid' => FALSE]);
    }

    public function verwijderenTodo($id)
    {
        return DB::table('todos')
        ->where('idTodo',$id)
        ->delete();
    }
}
