<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Canchas') }}
        </h2>
    </x-slot>

    <div class="overflow-x-auto relative">

        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-blue-100 dark:text-blue-100">
                <thead class="text-xs text-white uppercase bg-gray-600 border-b border-blue-400 dark:text-white">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Nombre
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Turnos
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($canchas as $cancha)
                    <tr class="uppercase bg-blue-600 border-b border-blue-400 hover:bg-blue-500">
                        <th scope="row" class="py-4 px-6 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                            {{ $cancha->nombre_cancha }}
                        </th>
                        <td class="py-4 px-6">
                            <a href="#" class="font-medium text-white hover:underline">Ver Turnos</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>