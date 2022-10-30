@extends('layouts.master')
@section('content')
    <table class="w-full text-sm text-gray-500 dark:text-gray-400 text-center">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th class="py-3 mx-6">Todo Name</th>
                <th class="py-3 mx-6">Todo Description</th>
                <th class="py-3 mx-6">Todo Operation</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todos as $todo)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="py-3 mx-6">{{ $todo->todo }}</td>
                    <td class="py-3 mx-6">{{ $todo->description }}</td>
                    <td class="py-3 mx-6">
                        <div class="flex">
                            <div class="basis-1/3">
                                <a href="/todo/{{ $todo->id }}" class="text-white font-bold">Read More</a>
                            </div>
                            <div class="basis-1/3">
                                <a href="/todo/update/{{ $todo->id }}" class="text-white font-bold">Update</a>
                            </div>
                            <form class="basis-1/3" action="/todo/{{ $todo->id }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="text-white font-bold">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
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