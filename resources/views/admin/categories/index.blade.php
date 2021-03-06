@extends('adminlte::page')

@section('title', 'Sistema')

@section('content_header')
    <h1>Lista de las categorias </h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
    
@endif
    <div class="card">
        <div class="card-header">
            <a href="{{route('admin.categories.create')}}" class="btn  btn-secondary btn-sm">Agregar Categoria</a>

        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>

                </thead>
                @foreach ($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->nombre}}</td>
                    <td width="10px">
                        <a href="{{route('admin.categories.edit', $category)}}" class="btn btn-primary btn-sm">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.categories.destroy', $category)}}" method="POST">
                        @csrf
                        @method('delete')

                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                    
                @endforeach

                <tbody>

                </tbody>

            </table>

        </div>
    </div>
@stop

