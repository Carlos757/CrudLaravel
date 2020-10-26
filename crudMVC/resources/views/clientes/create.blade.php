@extends('plantilla')

@section('title','Nuevo Cliente')

@section('content')
<div class="row">
    <div class="card">
        <div class="card-header">
            Agregar nuevo Cliente
        </div>
        <div class="card-header">
            <form action="{{route('clientes.store')}}" method="POST">
                @csrf
                <div>
                    <label for="rfc">RFC:</label>
                    <input type="text" name="rfc" class="form-control">
                    @error('rfc') 
                            <div class="alert-danger " role="alert">
                                <small>{{$message}}</small>
                            </div>
                    @enderror
                </div>

                <div>
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" class="form-control">
                    @error('nombre')
                            <div class="alert-danger " role="alert">
                                <small>{{$message}}</small>
                            </div>
                    @enderror
                </div>
                <div>
                    <label for="edad"> Edad:</label>
                    <input type="text" name="edad" class="form-control">
                    @error('edad')
                        <div class="alert-danger " role="alert">
                            <small>{{$message}}</small>
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="idCiudad">IdCiudad:</label>
                    <input type="text" name="idCiudad" class="form-control">
                    @error('idCiudad')
                        <div class="alert-danger " role="alert">
                            <small>{{$message}}</small>
                        </div>
                    @enderror
                </div>
                <br>

                {{--  componente alerta --}}
                <x-alerta />

                <br>
                <a class="btn btn-link" href="{{route('clientes.index')}}">Regresar</a>
                <button type="submit" class="btn btn-success">Agregar</button>
            </form>
        </div>
    </div>
</div>
@endsection