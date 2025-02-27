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
                            <th class="border border-gray-300 ...">titre</th>
                            <th class="border border-gray-300 ...">description</th>
                            <th class="border border-gray-300 ...">prix</th>
                            <th class="border border-gray-300 ...">categorie</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td class="border border-gray-300 ...">{{$product->titre}}</td>
                            <td class="border border-gray-300 ...">{{$product->description}}</td>
                            <td class="border border-gray-300 ...">{{$product->prix}}</td>
                            <td class="border border-gray-300 ...">{{$product->categorie_id}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>