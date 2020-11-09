@extends('plantilla')

@section('title','Crud')

@section('content')

<br><br>
<div class="max-w-3xl mx-auto shadow-xl p-10 bg-white rounded">
    <div class="flex mb-5">
        <div class="w-3/4 pt-6 pl-3"><h1 class="text-2xl font-black">Clientes</h1></div>
        <div class="w-1/4 pt-6 pl-8"> 
            <a href="{{route('clientes.create')}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">
                Nuevo Cliente
            </a>
        </div>
    </div>
    
    <x-search-bar></x-search-bar>
    <br>

    @if ($clientes->count() == 0)
        <br>
        <div class="bg-yellow-100 border-t-4 border-yellow-500 rounded-b text-yellow-900 px-4 py-3 shadow-md" role="alert">
            <div class="flex">
                <div class="py-1"><svg class="fill-current h-6 w-6 text-yellow-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                <div>
                    <p class="font-bold">Opss..</p>
                    <p class="text-sm">No se encontraron resultados</p>
                </div>
            </div>
        </div>
        <br>
         

    @else
        <table class="bg-white rounded-lg shadow overflow-hidden max-w-2xl mx-auto">
            <thead class="bg-gray-100 border-b border-gray-300">
                <tr class="text-lg font-bold text-gray-600 uppercase text-left tracking-wider">
                    <th class="px-6 py3">RFC</th>
                    <th class="px-6 py3">Nombre</th>
                    <th class="px-6 py3">Edad</th>
                    <th class="px-6 py3">IdCiudad</th>
                    <th class="px-8 py3">
                        Opciones
                    </th>
                </tr>

        <tbody class="divide-y divide-gray-200">
        @foreach ($clientes as $cliente)
        <tr class="text-center">
            <td class="px-6 py-4">{{ $cliente->rfc}}</td>
            <td class="px-6 py-4">{{ $cliente->nombre}}</td>
            <td class="px-6 py-4">{{ $cliente->edad}}</td>
            <td class="px-6 py-4">{{ $cliente->idCiudad}}</td>
            <td class="px-6 py-4">
                <div class="inline-flex">
                    <a href="{{route('clientes.edit', $cliente)}}" class=" bg-blue-300 hover:bg-blue-400 text-blue-800 font-bold py-1 px-2 rounded-l">
                      Editar
                    </a>
                    
                    <form class="form" action="{{route('clientes.destroy', $cliente)}}" method="POST" >
                        @csrf
                        @method('delete')
                        <button type="submit" class=" bg-red-300 hover:bg-red-400 text-red-800 font-bold py-1 px-2 rounded-r">
                        Borrar
                        </button>                         
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
            </tbody>
        </thead>
        </table>
    @endif    

    
    <div>
        <br>
        <ul class="">
            {{ $clientes->links() }}
        </ul>
    </div>
    
</div>

@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
 
		$('.form').submit(function(e)
        {   

            e.preventDefault(); 

            Swal.fire({
                title: 'Estas seguro?',
                text: "No podras revertir la accion",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminar'
                }).then((result) => {
                if (result.isConfirmed) {

                    this.submit();
                }
            })
        });
        
    </script>
@endsection