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
                                CURRICULUMS VITE
                                <a href="{{ route('resume.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>
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
                                                <th>Nombre</th>
                                                <th>Foto</th>
                                                <th>Profesion</th>
                                                <th>Telefono</th>
                                                <th>Correo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($resumes as $resume)

                                                <tr>

                                                    <td><strong>{{ $resume->id }}</strong></td>
                                                    <td> {{ $resume->name}} </td>
                                                    <td>
                                                        @if($resume->photo)
                                                        <img src="{{ $resume->get_photo }}" alt="FOTO" width="60px" height="auto">
                                                        @endif
                                                    </td>
                                                    <td> {{ $resume->profession}} </td>
                                                    <td> {{ $resume->telephone}} </td>
                                                    <td> {{ $resume->email}} </td>
                                                    <td class="d-flex">
                                                        <a href="{{ route('resume.edit', $resume) }}" class="btn btn-warning mr-2"><i class="far fa-edit"></i></a>
                                                        <form action="{{ route('resume.destroy', $resume) }}" method="POST">
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
