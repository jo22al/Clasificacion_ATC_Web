@extends('adminlte::page')

@section('content')


<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    EDITAR SUB CLASIFICACION
                    <a href="{{ route('subclassification.index') }}" class="btn btn-danger btn-sm mb-4 float-right">Cancelar</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('subclassification.update', $subclassification) }}" method="POST" enctype="multipart/form-data">


                        <div class="form-group">
                            <label>Clasificacion</label>
                            <select name="classification_id" required>
                               @if($subclassification->classification_id)
                                <option
                                    value="{{ $subclassification->classification->id }}"
                                >
                                    {{ $subclassification->classification->name }}
                                </option>
                                @else
                                <option value=""></option>
                               @endif

                                @foreach($classifications as $classification)

                                    @continue(@$classification->id == @$subclassification->classification->id)

                                    <option
                                        value="{{ $classification->id }}"
                                    >
                                        {{ $classification->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Nombre</label>
                            <input
                                type="text"
                                name="name"
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name', $subclassification->name) }}"
                                autofocus
                            >
                        </div>
                        <div class="form-group">
                            <label>Codigo</label>
                            <input
                                type="text"
                                name="code"
                                class="form-control @error('code') is-invalid @enderror"
                                value="{{ old('code', $subclassification->code) }}"
                                autofocus
                            >
                        </div>
                        <div class="form-group">
                            <label>Inforamcion Adicional</label>
                            @error('additional')
                                <span class="small text-danger">*Debes llenar este campo</span>
                            @enderror
                            <textarea
                                name="additional"
                                id="additional"
                                cols=""
                                rows="4"
                                class="form-control"
                            >
                                {{ old('additional', $subclassification->additional) }}
                            </textarea>
                        </div>
                        <hr>
                        <div class="form-group">
                            @csrf
                            @method('put')
                            <input
                                type="submit"
                                value="Editar"
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



@section('js')

    <script src="https://cdn.tiny.cloud/1/oph8tkt13egu2yl9zxiyutfk4g3b5srt52tr11x29913nl44/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
    tinymce.init({
        selector: '#additional',
        plugins: 'table code advtable lists fullscreen',
        language: 'es'
    })
    </script>



@stop

