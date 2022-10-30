<?php

namespace App\Http\Controllers;

use App\Http\Requests\todoRequest;
use App\Models\Todo;

class todoController extends Controller
{
    public function indexPage() {
        $todos = Todo::orderBy('id')->get();

        return view('index', [
            "pageTitle" => "Todo List",
            "todos" => $todos
        ]);
    }

    public function getAddTodo() {
        return view('addTodo', [
            "pageTitle" => "Add Todo"
        ]);
    }

    public function getSingleTodo($todoID) {
        $todo = Todo::where('id', $todoID)->get();
        return view("singleTodo", [
            "pageTitle" => "Todo: $todoID",
            "todo" => $todo
        ]);
    }

    public function deleteTodo($todoID) {
        $todo = Todo::where("id", $todoID);
        $todo->delete();

        return redirect('/');
    }

    public function postAddTodo(todoRequest $request) {
        $validator = $request->validated();
        Todo::create([
            "todo" => $validator['todo'],
            "description" => $validator['description']
        ]);
        return redirect('/');
    }
    
    public function updateTodo(todoRequest $request, $todoID) {
        $todo = Todo::findOrFail($todoID);
        $validator = $request->validated();

        $todo->update([
            "todo" => $validator['todo'],
            "description" => $validator['description']
        ]);

        return redirect('/');
    }

    public function getUpdateTodo($todoID) {
        $todo = Todo::where('id', $todoID)->get();
        return view("updateTodo", [
            "pageTitle" => "Todo: $todoID",
            "todo" => $todo
        ]);
    }
}
