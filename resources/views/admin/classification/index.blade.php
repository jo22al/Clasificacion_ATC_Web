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
                                CLASIFICACIONES
                                <a href="{{ route('classification.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>
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
                                                <th>GRUPO</th>
                                                <th>CODIGO</th>
                                                <th>NOMBRE</th>
                                                <th>ACCIONES</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($classifications as $classification)

                                                <tr>

                                                    <td><strong>{{ $classification->id }}</strong></td>
                                                    <td>{{ $classification->group->name }}</td>
                                                    <td>{{ $classification->code }}</td>
                                                    <td>{{ $classification->name }}</td>
                                                    <td class="d-flex">
                                                        <a href="{{ route('classification.edit', $classification) }}" class="btn btn-warning mr-2"><i class="far fa-edit"></i></a>
                                                        <form action="{{ route('classification.destroy', $classification) }}" method="POST">
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
                                <div class="mt-3">
                                        {{ $classifications->links('pagination::bootstrap-4') }}
                                </div>

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
