@extends('plantilla')

@section('title','Crud')

@section('content')

<div class="container">
    <h1>Clientes</h1>

    <a href="{{route('clientes.create')}}">Nuevo Cliente</a>
    <br><br>
    <div class="table-responsive">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>RFC</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>IdCiudad</th>
                </tr>

            </thead>

            <tbody>
                @foreach ($clientes as $empleado)
                <tr>
                    <td>{{ $empleado->rfc}}</td>
                    <td>{{ $empleado->nombre}}</td>
                    <td>{{ $empleado->edad}}</td>
                    <td>{{ $empleado->idCiudad}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>


        <div aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                {!! $clientes->links() !!}
            </ul>
        </div>
        
    </div>
</div>

@endsection