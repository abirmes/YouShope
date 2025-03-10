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
                            <th class="border border-gray-300 ...">description</th>
                            <th class="border border-gray-300 ...">actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $categorie)
                        <tr>
                            <td class="border border-gray-300 ...">{{$categorie->name}}</td>
                            <td class="border border-gray-300 ...">{{$categorie->description}}</td>
                            <td class="border border-gray-300 ...">
                                <a href="/catupdate/{{$categorie->id}}" class="btn btn-primary">update</a>
                                <form method="POST" action="{{ route('deleteCategorie', $categorie->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-sm btn-danger" value="Supprimer">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>