@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Facultades</h1>


@stop

@section('content')
    <h1>Listado Facultades</h1>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Opciones</th>
                <th>
                    <a type="button" class="btn btn-success " href="/facultades/registro">+</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @php
                $cont = 1;
            @endphp
            @foreach ($facultades  as $f)
                <tr>   
                    <td>{{$cont}}</td>
                    <td>{{$f->codfacultad}}</td>
                    <td>{{$f->nomfacultad}}</td>
                    <td>
                        <a type="button" class="btn btn-primary" >Editar</a>
                        <a type="button" class="btn btn-danger" href="{{route('eliminarFac',$f -> codfacultad)}}">Eliminar</a>

                    </td>
                </tr>
                @php
                    $cont = $cont + 1
                @endphp
            @endforeach
        </tbody>
    </table>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
