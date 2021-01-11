@extends('todos.layout')
@section('content')

<div class=" flex justify-center border-b pb-4">
    <h1 class="text-2xl">All todos</h1>
    <a href="/todos/create"
        class="mx-5 py-1 px-1 bg-blue-400 rounded cursor-pointer text-white">
        Create New</a>
</div>

    <ul class="my-5">
        <x-alert />
        @foreach ($todos as $todo)
        <li class=" flex justify-between p-2">
            @if ($todo->completed)
            <p class="line-through">{{$todo->title}}</p>
            @else
            <p>{{$todo->title}}</p>
            @endif

            <div>

                <a href="{{'/todos/'.$todo->id.'/edit'}}"
                    class="mx-5 py-1 px-1 text-orange-400  cursor-pointer text-white">
                    <span class="fas fa-edit  px-2" /></a>
                    @if ($todo->completed)
                    <span class="fas fa-check text-green-400 px-2" />
                    @else
                    <span class="fas fa-check text-gray-300 cursor-pointer px-2" />
                    @endif

            </div>


        </li>
        @endforeach
    </ul>
@endsection






