<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class=" text-center pt-10">
            <h1 class="text-2xl">What you need to do</h1>
            <x-alert />
    <form action="/todos/create" method="POST" class="py-5">
        @csrf
        <input type="text" name="title" class=" py-2 px-2 border rounded">
        <input type="submit" value="create" class=" p-2 border rounded">

    </form>
    </div>

</body>
</html>