<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class todo extends Model
{
    protected $fillable = ['todo'];

    public function ophalenTodo()
    {
        return DB::table('todos')
        ->where('idUser',0)
        ->get();
    }

    public function toevoegenTodo()
    {
        return DB::table('todos')
        ->where('idUser',0)
        ->get();
    }

    public function wijzigenTodo($id)
    {
        return DB::table('todos')
        ->where('idUser',0)
        ->get();
    }

    public function verwijderenTodo($id)
    {
        return DB::table('todos')
        ->where('idTodo',$id)
        ->delete();
    }
}
