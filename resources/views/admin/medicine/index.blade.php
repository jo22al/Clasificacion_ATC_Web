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
                                MEDICINAS
                                <a href="{{ route('medicine.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>
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
                                                <th></th>                                            
                                                <th>PRINCIPIO ACTIVO</th>
                                                <th>FORMA FARMACEUTICA</th>
                                                <th>INDICACIONES</th>
                                                <th>VIA</th>
                                                <th>REGLAS DE MANEJO</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($medicines as $medicine)

                                                <tr>

                                                    <td><strong>{{ $medicine->id }}</strong></td> 
                                                    <td>
                                                        @if($medicine->classification)
                                                            <strong>Clasificacion: </strong> {{ $medicine->classification->name }}
                                                        @endif    
                                                        @if($medicine->subclassification)
                                                            <strong>Sub Clasificacion: </strong> {{ $medicine->subclassification->name }}
                                                        @endif    
                                                    </td>                                           
                                                    <td> {{ $medicine->active_principle}} </td>
                                                    <td>{{ $medicine->pharmaceutical_form }}</td>
                                                    <td>{{ $medicine->indications }}</td>
                                                    <td>{{ $medicine->route_dosage }}</td>
                                                    <td>{{ $medicine->management_rules }}</td>
                                                    <td class="d-flex">
                                                        <a href="{{ route('medicine.edit', $medicine) }}" class="btn btn-warning mr-2"><i class="far fa-edit"></i></a>
                                                        <form action="{{ route('medicine.destroy', $medicine) }}" method="POST">
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