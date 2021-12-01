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
                                GRUPOS
                                <a href="{{ route('group.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>
                            </div>

                            <div class="card-body">
                                @if(session('success'))
                                    <div class="alert alert-success" role="success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="table-responsive">
                                    <table id="medicinesTable" class="table">
                                        <thead>
                                            <tr>
                                                <th>LETRA</th>
                                                <th>NOMBRE</th>
                                                <th>ACCIONES</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($groups as $group)

                                                <tr>
                                                    <td>{{ $group->letter }}</td>
                                                    <td>{{ $group->name }}</td>
                                                    <td class="d-flex">
                                                        <a href="{{ route('group.edit', $group) }}" class="btn btn-warning mr-2"><i class="far fa-edit"></i></a>
                                                        <form action="{{ route('group.destroy', $group) }}" method="POST">
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
                                        {{-- {{ $groups->links('pagination::bootstrap-4') }} --}}
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

@section('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

@stop

@section('js')

 <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

 <script>

$(document).ready( function () {

    $('#medicinesTable').DataTable( {
        columnDefs: [
            { orderable: false, targets: 2 },
        ],
        "language": {
            "info": "Mostrando pagina _PAGE_ de _PAGES_",
            "decimal":        "",
            "emptyTable":     "No hay datos",
            "infoEmpty":      "Showing 0 to 0 of 0 registros",
            "infoFiltered":   "(filtrado de _MAX_ total registros)",
            "infoPostFix":    "",
            "thousands":      ",",
            "lengthMenu":     "Mostrando _MENU_  registros",
            "loadingRecords": "Cargando...",
            "processing":     "Procesando...",
            "search":         "Buscar:",
            "zeroRecords":    "No se encontro ningun dato",
            "paginate": {
                "first":      "Primero",
                "last":       "Ultimo",
                "next":       "Siguiente",
                "previous":   "Anterior"
            },
        },
    } );

} );

 </script>


@stop
