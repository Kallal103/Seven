@extends('todos.layout')

@section('content')

<h1 class="text-2xl">What you need to do</h1>
            <x-alert />
    <form action="/todos/create" method="POST" class="py-5">
        @csrf
        <input type="text" name="title" class=" py-2 px-2 border rounded">
        <input type="submit" value="create" class=" p-2 border rounded">

    </form>
    <a href="/todos" class="m-5 py-1 px-1 bg-white-400 border rounded cursor-pointer"> Back</a>

@endsection
