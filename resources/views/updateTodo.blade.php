@extends('layouts.master')
@section('content')
<form action="/todo/{{$todo[0]->id}}" class="pt-9 w-full" method="POST">
    @csrf
    @method('put')
    <div class="text-center">
        <input type="text" placeholder="Todo Name..." class="rounded border-2 px-3 py-5" name="todo" value="{{ $todo[0]->todo }}">
        <input type="text" placeholder="Todo Description..." class="rounded border-2 px-3 py-5" name="description" value="{{ $todo[0]->description }}">
        <button class="text-white bg-[#1565c0] p-5 rounded">Post Something</button>
    </div>
</form>
@endsection