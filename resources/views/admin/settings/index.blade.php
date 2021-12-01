@extends('adminlte::page')

@section('title', 'Configuraciones')



@section('content')


<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    CONFIGURACIONES
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            Te falta llenar un campo oh la contraseña es muy corta
                        </div>
                    @endif

                    <form action="{{ route('settings.update', $user) }}" method="PUT" enctype="multipart/form-data">

                        <h3>Acceso</h3>

                        <div class="form-group">
                            <label>Nombre de Usuario</label>
                            <input
                                type="text"
                                name="name"
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name', $user->name) }}"
                            >
                        </div>

                        <div class="form-group">
                            <label>Correo</label>
                            <input
                                type="Correo"
                                name="email"
                                class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email', $user->email) }}"
                            >
                        </div>

                        <div class="form-group">
                            <label>Nueva Contraseña</label>
                            <input
                                type="password"
                                name="password"
                                class="form-control @error('password') is-invalid @enderror"
                            >
                        </div>

                        <div class="form-group">
                            @csrf
                            @method('put')
                            <input
                                id="Actualizar"
                                type="submit"
                                value="Guardar"
                                class="btn btn-sm btn-primary form-control mt-4"
                            >
                        </div>

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>


@stop

