@extends('todos.layout')

@section('content')

<h1 class="text-2xl border-b pb-4">What you need to do</h1>
            <x-alert />
    <form action="{{route('todo.store')}}" method="POST" class="py-5">
        @csrf
        <input type="text" name="title" class=" py-2 px-2 border rounded">
        <input type="submit" value="create" class=" p-2 border rounded">

    </form>
    <a href="{{route('todo.index')}}" class="m-5 py-1 px-1 bg-white-400 border rounded cursor-pointer"> Back</a>

@endsection
