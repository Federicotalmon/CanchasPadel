<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion de turnos') }}
        </h2>
    </x-slot>
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


    @if(auth()->user()->id == $id )
    <div class="overflow-x-auto relative mx-10 p-4">

        <a href="{{route('crear_turno',['id'=> $id])}}">
            <button class="bg-transparent hover:bg-green-500 text-green-500 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded"> Nuevo Turno</button>
        </a>
    </div>
    @endif

    <div class="overflow-x-auto relative">

        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-blue-100 dark:text-blue-100">
                <thead class="text-xs text-white uppercase bg-gray-600 border-b border-blue-400 dark:text-white">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Nombre Cancha
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Fecha
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Estado
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($turnos as $turno)
                    <tr class="uppercase bg-gray-600 border-b border-blue-400 ">
                        <th scope="row" class="py-4 px-6 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                            {{ $turno->cancha->nombre_cancha }}
                        </th>
                        <td class="py-4 px-6">
                            {{ $turno->fecha }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $turno->estado->nombre }}
                        </td>
                        <td class="py-4 px-6">
                            @if(($turno->estado->nombre=='Reservado'))
                            @if(auth()->user()->id == $turno->user_id)
                            <a href="{{route('cancelar_turno',['turno_id'=> $turno->id])}}">
                                <button class="bg-gray-600 hover:bg-blue-500 text-white font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                    Cancelar
                            </a>
                            @endif
                            @else
                            <a href="{{route('reservar_turno',['turno_id'=> $turno->id,'user_id' => auth()->user()->id])}}">
                                <button class="bg-gray-600 hover:bg-green-500 text-white font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">
                                    Reservar
                                </button>
                            </a>
                            @endif
                            @role('duenio')
                            @if(auth()->user()->id == $id)
                            <form method="POST" action="{{ route('delete_turno', ['id' => $turno->id] ) }}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger bg-transparent hover:bg-red-500 text-white font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded" onclick="return confirm('Seguro mi rey?')" value="Eliminar">
                                </form>
                                
                            @endif
                            @endrole
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>