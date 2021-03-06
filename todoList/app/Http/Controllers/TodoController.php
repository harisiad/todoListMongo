<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function show($slug)
    {
        return view('todo', [
            'todo' => Todo::where('slug', '=', $slug)->first()
        ]);
    }

    public function store(Request $request)
    {
        $todo = new Todo();

        $todo->title = $request->title;
        $todo->body = $request->body;
        $todo->slug = $request->slug;

        $todo->save();

        return response()->json([
            "result" => "ok"
        ], 201);
    }

    public function destroy(string $todoId)
    {
        $todo = Todo::find($todoId);
        $todo->delete();

        return response()->json([
            "result" => "ok"
        ], 200);
    }

    public function update(Request $request, string $todoId)
    {
        $todo = Todo::find($todoId);
        $todo->title = $request->title;
        $todo->body = $request->body;
        $todo->slug = $request->slug;

        $todo->save();

        return response()->json([
            "result" => "ok"
        ], 201);
    }
}
