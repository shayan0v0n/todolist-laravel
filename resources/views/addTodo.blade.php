@extends('layouts.master')
@section('content')
<form action="/todo" class="pt-9 w-full" method="POST">
    @csrf
    @method('post')
    <div class="text-center">
        <input type="text" placeholder="Todo Name..." class="rounded border-2 px-3 py-5" name="todo">
        <input type="text" placeholder="Todo Description..." class="rounded border-2 px-3 py-5" name="description">
        <button class="text-white bg-[#1565c0] p-5 rounded">Post Something</button>
    </div>
</form>
@endsection