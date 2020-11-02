@extends('plantilla')

@section('title','Editar Cliente')

@section('content')
<br><br>
<div class="max-w-2xl mx-auto my-auto">
    <form action="{{route('clientes.update', $cliente)}}" method="POST" class="shadow-xl p-10 bg-white max-w-xl rounded">
        @csrf
        @method('put')

        <h1 class="text-2xl font-black mb-4">Actualizar Cliente</h1>
        <div class="mb-4 relative">
            <input value="{{$cliente->rfc}}" readonly name="rfc" type="text" class="input bg-gray-300 border border-gray-400 appearance-none rounded w-full px-3 py-3 pt-5 pb-2 focus focus:border-gray-700 focus:outline-none active:outline-none active:border-indigo-600" autofocus>
            <label for="rfc" class="label absolute mb-0 -mt-2 pt-4 pl-3 leading-tighter text-gray-400 text-base mt-2 cursor-text">RFC</label>
            @error('rfc')
            <div class="bg-red-100 border-l-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md" role="alert">
                <div class="flex">
                    <div class="py-1"><svg class="fill-current h-4 w-4 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"> <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" /></svg></div>
                    <div>
                        <p class="text-sm">{{$message}}</p>
                    </div>
                </div>
            </div>
            @enderror
        </div>
        <div class="mb-4 relative">
            <input value="{{$cliente->nombre}}" name="nombre" wire:model="nombre" type="text" class="input border border-gray-400 appearance-none rounded w-full px-3 py-3 pt-5 pb-2 focus focus:border-gray-700 focus:outline-none active:outline-none active:border-indigo-600" autofocus>
            <label for="nombre" class="label absolute mb-0 -mt-2 pt-4 pl-3 leading-tighter text-gray-400 text-base mt-2 cursor-text">Nombre</label>
            @error('nombre')
            <div class="bg-red-100 border-l-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md" role="alert">
                <div class="flex">
                    <div class="py-1"><svg class="fill-current h-4 w-4 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"> <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" /></svg></div>
                    <div>
                        <p class="text-sm">{{$message}}</p>
                    </div>
                </div>
            </div>
            @enderror
        </div>
        <div class="mb-4 relative">
            <input value="{{$cliente->edad}}" name="edad" wire:model="edad" type="text"
                class="input border border-gray-400 appearance-none rounded w-full px-3 py-3 pt-5 pb-2 focus focus:border-gray-700 focus:outline-none active:outline-none active:border-indigo-600"
                autofocus>
            <label for="edad"
                class="label absolute mb-0 -mt-2 pt-4 pl-3 leading-tighter text-gray-400 text-base mt-2 cursor-text">Edad</label>
            @error('edad')
            <div class="bg-red-100 border-l-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md" role="alert">
                <div class="flex">
                    <div class="py-1"><svg class="fill-current h-4 w-4 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"> <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" /></svg></div>
                    <div>
                        <p class="text-sm">{{$message}}</p>
                    </div>
                </div>
            </div>
            @enderror
        </div>
        <div class="mb-4 relative">
            <input value="{{$cliente->idCiudad}}" name="idCiudad" wire:model="idCiudad" type="text"
                class="input border border-gray-400 appearance-none rounded w-full px-3 py-3 pt-5 pb-2 focus focus:border-gray-700 focus:outline-none active:outline-none active:border-indigo-600"
                autofocus>
            <label for="idCiudad"
                class="label absolute mb-0 -mt-2 pt-4 pl-3 leading-tighter text-gray-400 text-base mt-2 cursor-text">IdCiudad</label>
            @error('idCiudad')
            <div class="bg-red-100 border-l-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md" role="alert">
                <div class="flex">
                    <div class="py-1"><svg class="fill-current h-4 w-4 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"> <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" /></svg></div>
                    <div>
                        <p class="text-sm">{{$message}}</p>
                    </div>
                </div>
            </div>
            @enderror
        </div>

        <x-alerta />
        <br>

        <div class="flex p-2 mt-4">
            <a href="{{route('clientes.index')}}" class="text-base hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded-xl font-bold cursor-pointer 
        hover:bg-gray-200  
        bg-gray-100 
        text-gray-700 
        border duration-200 ease-in-out 
        border-gray-600 transition">Regresar</a>
            <div class="flex-auto flex flex-row-reverse">
                <button type="submit" class="text-base  ml-2  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 font-bold cursor-pointer rounded-xl
        hover:bg-teal-700  
        bg-teal-500 
        text-white 
        border duration-200 ease-in-out 
        border-teal-600 transition px-8">Actualizar</button>
            </div>
        </div>
    </div>

    </form>
</div>
@endsection