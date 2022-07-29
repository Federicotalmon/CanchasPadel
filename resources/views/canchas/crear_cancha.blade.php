<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agregar nueva cancha') }}
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
    <div>
        <form method="POST" action="{{route('store_cancha',['id' => $id])}}">
            @csrf
            <div>
                <input class="m-2 p-2" name="nombre_cancha" type="text" placeholder="Ingresar nombre">
                <button class="bg-transparent hover:bg-green-500 text-green-500 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">
                    Crear
                </button>
            </div>

        </form>
    </div>

</x-app-layout>