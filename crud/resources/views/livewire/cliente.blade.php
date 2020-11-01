<div class="container mx-auto ">
    
    <div class="bg-white rounded-lg shadow overflow-hidden max-w-2xl mx-auto p-4 mb-6">

        <form action="" wire:submit.prevent="store" class="shadow-xl p-10 bg-white max-w-xl rounded" >
            @csrf
            <h1 class="text-2xl font-black mb-4">Nuevo Cliente</h1>
            <div class="mb-4 relative">
                <input id="rfc" wire:model="rfc" type="text" class="input border border-gray-400 appearance-none rounded w-full px-3 py-3 pt-5 pb-2 focus focus:border-gray-700 focus:outline-none active:outline-none active:border-indigo-600" autofocus>
                <label for="rfc" class="label absolute mb-0 -mt-2 pt-4 pl-3 leading-tighter text-gray-400 text-base mt-2 cursor-text">RFC</label>
                @error('rfc') 
                    <div class="bg-red-100 border-l-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md" role="alert">
                        <div class="flex">
                            <div class="py-1"><svg class="fill-current h-4 w-4 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                            <div>
                                <p class="text-sm">{{$message}}</p>
                            </div>
                        </div>
                    </div>
                @enderror  
            </div>
            <div class="mb-4 relative">
                <input id="nombre" wire:model="nombre" type="text" class="input border border-gray-400 appearance-none rounded w-full px-3 py-3 pt-5 pb-2 focus focus:border-gray-700 focus:outline-none active:outline-none active:border-indigo-600" autofocus>
                <label for="nombre" class="label absolute mb-0 -mt-2 pt-4 pl-3 leading-tighter text-gray-400 text-base mt-2 cursor-text">Nombre</label>
                @error('nombre')
                <div class="bg-red-100 border-l-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md" role="alert">
                    <div class="flex">
                        <div class="py-1"><svg class="fill-current h-4 w-4 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                        <div>
                            <p class="text-sm">{{$message}}</p>
                        </div>
                    </div>
                </div>
                @enderror
            </div>
            <div class="mb-4 relative">
                <input id="edad" wire:model="edad" type="text" class="input border border-gray-400 appearance-none rounded w-full px-3 py-3 pt-5 pb-2 focus focus:border-gray-700 focus:outline-none active:outline-none active:border-indigo-600" autofocus>
                <label for="edad" class="label absolute mb-0 -mt-2 pt-4 pl-3 leading-tighter text-gray-400 text-base mt-2 cursor-text">Edad</label>
                @error('edad')
                <div class="bg-red-100 border-l-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md" role="alert">
                    <div class="flex">
                        <div class="py-1"><svg class="fill-current h-4 w-4 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8                        </div>  0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                        <div>
                            <p class="text-sm">{{$message}}</p>
                    </div>
                </div>
                @enderror
            </div>
            <div class="mb-4 relative">
                <input id="idCiudad" wire:model="idCiudad" type="text" class="input border border-gray-400 appearance-none rounded w-full px-3 py-3 pt-5 pb-2 focus focus:border-gray-700 focus:outline-none active:outline-none active:border-indigo-600" autofocus>
                <label for="idCiudad" class="label absolute mb-0 -mt-2 pt-4 pl-3 leading-tighter text-gray-400 text-base mt-2 cursor-text">IdCiudad</label>
                @error('idCiudad')
                <div class="bg-red-100 border-l-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md" role="alert">
                    <div class="flex">
                        <div class="py-1"><svg class="fill-current h-4 w-4 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                        <div>
                            <p class="text-sm">{{$message}}</p>
                        </div>
                    </div>
                </div>
                @enderror
            </div>

            <button {{-- wire:click="store" --}} type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                Crear
            </button>

        </form>




        {{-- <form action="" class="max-w-lg mx-auto">
            @csrf
            <div>
                <label for="rfc" class="form-label">RFC:</label>
                <input type="text" name="rfc" class="form-input">
                @error('rfc') 
                        <div class="alert-danger " role="alert">
                            <small>{{$message}}</small>
                        </div>
                @enderror
            </div>

            <div>
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" name="nombre" class="form-input">
                @error('nombre')
                        <div class="alert-danger " role="alert">
                            <small>{{$message}}</small>
                        </div>
                @enderror
            </div>
            <div>
                <label for="edad" class="form-label"> Edad:</label>
                <input type="text" name="edad" class="form-input">
                @error('edad')
                    <div class="alert-danger " role="alert">
                        <small>{{$message}}</small>
                    </div>
                @enderror
            </div>
            <div>
                <label for="idCiudad" class="form-label">IdCiudad:</label>
                <input type="text" name="idCiudad" class="form-input">
                @error('idCiudad')
                    <div class="alert-danger " role="alert">
                        <small>{{$message}}</small>
                    </div>
                @enderror
            </div>
            <br>

            <br>
            <a class="btn btn-link" href="">Regresar</a>
            <button type="submit" class="btn btn-success">Agregar</button>

        </form>
    </div> --}}
    
    
    
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
                        <button class="bg-blue-500 hover:bg-blue-600 mb-2 text-white font-bold py-1 rounded-full w-full">Editar</button>
                        <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 rounded-full w-full">Borrar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </thead>
    </table>
</div>
