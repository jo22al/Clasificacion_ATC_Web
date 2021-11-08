@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')



<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mt-2">
                            
                            <div class="card-header">
                                SUB CLASIFICACIONES
                                <a href="{{ route('subclassification.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>
                            </div>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <div class="table-responsive">  
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>CLASIFICACION</th>
                                                <th>CODIGO</th>
                                                <th>NOMBRE</th>
                                                <th>ACCIONES</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($subclassifications as $subclassification)

                                                <tr>

                                                    <td><strong>{{ $subclassification->id }}</strong></td>                                            
                                                    <td> {{ $subclassification->classification->name }} </td>
                                                    <td>{{ $subclassification->code }}</td>
                                                    <td>{{ $subclassification->name }}</td>
                                                    <td class="d-flex">
                                                        <a href="{{ route('subclassification.edit', $subclassification) }}" class="btn btn-warning mr-2"><i class="far fa-edit"></i></a>
                                                        <form action="{{ route('subclassification.destroy', $subclassification) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" type="submit" onclick="return confirm('Desea eliminar?')">
                                                                <i class="fas fas fa-trash-alt"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>

                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <div class="card-footer mr-auto">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>



@stop


@section('js')

@stop