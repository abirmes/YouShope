<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    <table class="border-separate border border-gray-400 ...">
  <thead>
    <tr>
      <th class="border border-gray-300 ...">State</th>
      <th class="border border-gray-300 ...">City</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="border border-gray-300 ...">Indiana</td>
      <td class="border border-gray-300 ...">Indianapolis</td>
    </tr>
    <tr>
      <td class="border border-gray-300 ...">Ohio</td>
      <td class="border border-gray-300 ...">Columbus</td>
    </tr>
    <tr>
      <td class="border border-gray-300 ...">Michigan</td>
      <td class="border border-gray-300 ...">Detroit</td>
    </tr>
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
