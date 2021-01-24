<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;



class TodoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function index(){
        $todos = auth()->user()->todos->sortBy('completed');
       // $todos = Todo::orderBy('completed')->get();
        return view('todos.index', compact('todos'));
    }

    public function create(){
        return view('todos.create');

    }

    public function show(Todo $todo)
    {
        return view('todos.show', compact('todo'));

    }

    public function store(TodoCreateRequest $request){
        //dd($request->all());
        // $userId = auth()->id();
        // $request['user_id'] = $userId;
        $todo = auth()->user()->todos()->create($request->all());
        if($request->step){
            foreach($request->step as $step ){
                $todo->steps()->create(['name' => $step]);
            }
        }


        //Todo::create($request->all());
        return redirect(route('todo.index'))->with('message','Todo is created successfully');
    }

    public function edit(Todo $todo){
        //dd($todo->title);
        //$todo = Todo::find($id);
        return view('todos.edit', compact('todo'));
    }

    public function update(TodoCreateRequest $request, Todo $todo){
        $todo->update(['title' =>$request->title,
        'description' => $request->description]);
        return redirect(route('todo.index'))->with('message','updated!');
    }
    /**
     *
     * @param \App\Todo $todo
     * @return void
     */
    public function complete(Todo $todo){
        $todo->update(['completed'=> true]);
        return redirect()->back()->with('message', 'task marked as completed!');

    }

     /**
     *
     * @param \App\Todo $todo
     * @return void
     */
    public function incomplete(Todo $todo){
        $todo->update(['completed'=> false]);
        return redirect()->back()->with('message', 'task marked as Incompleted!');

    }
        /**
     *
     * @param \App\Todo $todo
     * @return void
     */
    public function destroy(Todo $todo){
        $todo->steps->each->delete();
        $todo->delete();
        return redirect()->back()->with('message', 'task Deleted!');

    }
}
