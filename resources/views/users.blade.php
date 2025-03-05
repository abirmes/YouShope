<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="border-separate border border-gray-400 ...">
                    <thead>
                        <tr>
                            <th class="border border-gray-300 ...">name</th>
                            <th class="border border-gray-300 ...">email</th>
                            <th class="border border-gray-300 ...">actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td class="border border-gray-300 ...">{{$user->name}}</td>
                            <td class="border border-gray-300 ...">{{$user->email}}</td>
                            <td class="border border-gray-300 ...">
                                <a href="/" class="btn btn-primary">update</a>
                                <a href="/" class="btn btn-primary">delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>