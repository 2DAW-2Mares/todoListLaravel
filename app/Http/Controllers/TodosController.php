<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use Illuminate\Support\Facades\Auth;

class TodosController extends Controller
{
    //
    public function postCreate(Request $request)
    {
        $todo = new Todo();
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->date = $request->date;
        $fechaActual = date_create();
        $fechaTodo = date_create($todo->date);
        
        if ($fechaTodo < $fechaActual) {
            $fechaMañana = date_add($fechaActual, date_interval_create_from_date_string('1 days'));
            $todo->date = date_format($fechaMañana, 'Y-m-d');;
        }
        
        $isComplete = $request->isComplete ? true : false;
        $todo->isComplete = $isComplete;
        $todo->user_id = Auth::user()->id;
        $todo->save();
        return redirect('/');
    }    

    public function getPendientes() {
        $eventosPendientes = Todo::where([
    ['user_id', '=', Auth::user()->id],
    ['isComplete', '<>', true],
])->get();
        return view('todos.eventosPendientes',
                array('eventosPendientes' => $eventosPendientes));
    }

}
