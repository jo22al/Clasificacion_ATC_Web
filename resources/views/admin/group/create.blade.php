@extends('adminlte::page')


@section('content')

<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    NUEVO GRUPO
                    <a href="{{ route('group.index') }}" class="btn btn-danger btn-sm mb-4 float-right">Cancelar</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('group.store') }}" method="POST">
                        <div class="form-group">
                            <label for="letter">Letra del grupo</label>
                            <input 
                                type="text" 
                                name="letter"
                                maxlength="1" 
                                class="form-control @error('letter') is-invalid @enderror" 
                                value="{{ old('letter') }}"
                                autofocus
                            >

                            @error('letter')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input 
                                type="text" 
                                name="name"
                                class="form-control @error('letter') is-invalid @enderror" 
                                value="{{ old('name') }}"
                            > 
                            @error('name')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Descripci??n</label>
                            <textarea
                            class="form-control @error('conocenos') is-invalid @enderror"
                            value="{{ old('description') }}"
                            id="description" 
                            name="description"></textarea>
    
                            @error('description')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
    
                        </div>

                        <div class="form-group">
                            @csrf
                            <input 
                                type="submit" 
                                value="Crear" 
                                class="btn btn-sm btn-primary form-control mt-4"
                            >
                        </div>
                    </form>
                        

                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('js')

    <script src="https://cdn.tiny.cloud/1/oph8tkt13egu2yl9zxiyutfk4g3b5srt52tr11x29913nl44/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
    tinymce.init({
        selector: '#description',
        plugins: 'table code advtable lists fullscreen',
        language: 'es',
        height: 400,
    })
    </script>

@stop