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
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="py-3 mx-6">{{ $todo[0]->todo }}</td>
                <td class="py-3 mx-6">{{ $todo[0]->description }}</td>
                <td class="py-3 mx-6">
                    <div class="flex">
                        <div class="basis-1/3">
                            <a href="/todo/{{ $todo[0]->id }}" class="text-white font-bold">Read More</a>
                        </div>
                        <div class="basis-1/3">
                            <a href="/todo/{{ $todo[0]->id }}" class="text-white font-bold">Update</a>
                        </div>
                        <form class="basis-1/3" action="/todo/{{ $todo[0]->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="text-white font-bold">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
@endsection