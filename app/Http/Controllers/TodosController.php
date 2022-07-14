<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    /* 
    * index para mostrar todos los 'Todos'
    * store para guaradar un todo
    * update para actualizar un todo
    * destroy para eliminar un todo
    * edit para mostrar el formulario de edicioen de un un todo
     */

    public function store(Request $request){

        $request->validate([
            'tittle' => 'required|min:3'
        ]);

        $todo = new Todo;
        $todo->tittle = $request->tittle;
        $todo->save();

        return redirect()->route('todos')->with('success','Tarea creada con exito');
    }
    
}
