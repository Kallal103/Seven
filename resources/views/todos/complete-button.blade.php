@if ($todo->completed)
<span onclick="event.preventDefault();
document.getElementById('form-incomplete-{{$todo->id}}')
.submit()"
class="fas fa-check text-green-300 cursor-pointer px-2" />
<form action="{{route('todo.incomplete', $todo->id)}}" id="{{'form-incomplete-'.$todo->id}}" method="POST" style="display: none">
    @csrf
    @method('delete')
</form>

@else
<span onclick="event.preventDefault();
document.getElementById('form-complete-{{$todo->id}}')
.submit()"
class="fas fa-check text-gray-300 cursor-pointer px-2" />
<form action="{{route('todo.complete', $todo->id)}}" id="{{'form-complete-'.$todo->id}}" method="POST" style="display: none">
    @csrf
    @method('put')
</form>
@endif
