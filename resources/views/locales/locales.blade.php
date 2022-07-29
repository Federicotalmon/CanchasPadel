<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Locales') }}
        </h2>
    </x-slot>

    <div class="overflow-x-auto relative mx-10 p-4">
        <a href="{{ route('crear_local')}}">
            <button class="bg-transparent hover:bg-green-500 text-green-500 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded"> Nuevo Local </button>
        </a>
    </div>

    <div class="overflow-x-auto relative">

        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-blue-100 dark:text-blue-100">
                <thead class="text-xs text-white uppercase bg-gray-600 border-b border-blue-400 dark:text-white">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Local
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Direccion
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Telefono
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Canchas
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($locales as $local)
                    <tr class="uppercase bg-gray-600 border-b border-blue-400">
                        <th scope="row" class="py-4 px-6 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                            {{ $local->nombre }}
                        </th>
                        <td class="py-4 px-6">
                            {{ $local->direccion }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $local->telefono }}
                        </td>
                        <td class="py-4 px-6">
                            <a href="{{ route ('show_canchas', ['id' => $local->id]) }}" class="font-medium text-white hover:underline">Canchas</a>
                        </td>
                        @can('crear local')
                        <td class="py-4 px-6">
                            <div class="inline">
                                <form method="POST" action="{{ route('delete_local', ['id' => $local->id] ) }}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger bg-transparent hover:bg-red-500 text-white font-semibold hover:text-white py-2 px-4 m-3 border border-red-500 hover:border-transparent rounded" onclick="return confirm('Seguro mi rey?')" value="Eliminar Local">
                                </form>
                                <button class="bg-transparent hover:bg-blue-500 text-white font-semibold hover:text-white py-2 px-4 m-2 border border-blue-500 hover:border-transparent rounded">Editar Local</button>
                            </div>
                        </td>
                        @endcan
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>