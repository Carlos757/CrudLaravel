@extends('plantilla')

@section('title','Crud')

@section('content')


<br><br>
<div class="max-w-3xl mx-auto shadow-xl p-10 bg-white rounded">
    <div class="flex mb-5">
        <div class="w-3/4 pt-6 pl-3"><h1 class="text-2xl font-black">Clientes</h1></div>
        <div class="w-1/4 pt-6 pl-8"> <a href="{{route('clientes.create')}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">Nuevo Cliente</a></div>
    </div>
    
    <x-search-bar></x-search-bar>
    <br>

    <table class="bg-white rounded-lg shadow overflow-hidden max-w-2xl mx-auto">
        <thead class="bg-gray-100 border-b border-gray-300">
            <tr class="text-lg font-bold text-gray-600 uppercase text-left tracking-wider">
                <th class="px-6 py3">RFC</th>
                <th class="px-6 py3">Nombre</th>
                <th class="px-6 py3">Edad</th>
                <th class="px-6 py3">IdCiudad</th>
                <th class="px-6 py3">
                    Opciones
                </th>
            </tr>

        <tbody>
            @foreach ($clientes as $cliente)
            <tr class="text-center">
                <td class="px-6 py-4">{{ $cliente->rfc}}</td>
                <td class="px-6 py-4">{{ $cliente->nombre}}</td>
                <td class="px-6 py-4">{{ $cliente->edad}}</td>
                <td class="px-6 py-4">{{ $cliente->idCiudad}}</td>
                <td class="px-6 py-4">
                    <button class="bg-blue-500 hover:bg-blue-600 mb-2 text-white font-bold py-1 rounded-full w-full">
                        Editar
                    </button>
                    <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 rounded-full w-full">
                        Borrar
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
        </thead>
    </table>

    
    <div class="justify-items-center">
        <br>
        <ul class="">
            {{ $clientes->links() }}
        </ul>
    </div>
    
</div>

@endsection