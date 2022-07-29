@if($errors->any())
<div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
    @foreach($errors->all() as $error)
    <div>{{ $error }}</div>
    @endforeach
</div>
@endif
@if(session()->has('message'))
<div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
    {{ session()->get('message') }}
</div>
@endif


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Canchas
        </h2>
    </x-slot>

    <div class="overflow-x-auto relative mx-10 p-4">
        <a href="{{ route('crear_cancha' ,['id' => $local_id ])}}">
            <button class="bg-transparent hover:bg-green-500 text-green-500 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded"> Nueva Cancha </button>
        </a>
    </div>

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
                        <th scope="col" class="py-3 px-6">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($canchas as $cancha)
                    <tr class="uppercase bg-gray-600 border-b">
                        <th scope="row" class="py-4 px-6 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                            {{ $cancha->nombre_cancha }}
                        </th>
                        <td class="py-4 px-6">
                            @if((auth()->user()->can('editar turno')) && (auth()->user()->id == $cancha->local->user->id))
                            <a href="{{ route ('show_turnos_cancha', ['id' => $cancha->id]) }}" class="font-medium text-white hover:underline">Administrar Turnos</a>
                            @else
                            <a href="{{ route ('show_turnos_cancha', ['id' => $cancha->id]) }}" class="font-medium text-white hover:underline">Ver Turnos</a>
                            @endif
                        </td>
                        @if((auth()->user()->can('eliminar cancha')) && (auth()->user()->id == $cancha->local->user->id))
                        <td class="py-4 px-6">
                            <div class="inline">
                                <form method="POST" action="{{ route('delete_cancha', ['id' => $cancha->id] ) }}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger bg-transparent hover:bg-red-500 text-white font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded" onclick="return confirm('Seguro mi rey?')" value="Eliminar Cancha">
                                </form>
                                <button class="bg-transparent hover:bg-blue-500 text-white font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Editar Cancha</button>
                            </div>
                        </td>
                        @endif
                        @role('admin')

                        <td class="py-4 px-6">
                            <div class="inline">
                                <form method="POST" action="{{ route('delete_cancha', ['id' => $cancha->id] ) }}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger bg-transparent hover:bg-red-500 text-white font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded" onclick="return confirm('Seguro mi rey?')" value="Eliminar Cancha">
                                </form>
                                <button class="bg-transparent hover:bg-blue-500 text-white font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Editar Cancha</button>
                            </div>
                        </td>
                        @endif
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>