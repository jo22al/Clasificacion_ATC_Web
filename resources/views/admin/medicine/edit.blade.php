@extends('adminlte::page')

@section('content')


<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    EDITAR MEDICAMENTO
                    <a href="{{ route('medicine.index') }}" class="btn btn-danger btn-sm mb-4 float-right">Cancelar</a>
                    <button
                    class="btn btn-primary btn-sm mb-4 mr-2 float-right"
                    onclick="document.getElementById('editar').click()"
                    >
                    Editar
                    </button>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('medicine.update', $medicine) }}" method="POST" enctype="multipart/form-data">


                        <div class="form-group">
                            <label>Clasificacion</label>
                            <select name="classification_id" class="browser-default custom-select">
                               @if($medicine->classification_id)
                                <option
                                    value="{{ $medicine->classification->id }}"
                                >
                                    {{ $medicine->classification->name }}
                                </option>
                                @else
                               @endif

                                    <option value="">Sin Clasificacion</option>

                                @foreach($classifications as $classification)

                                    @continue(@$classification->id == @$medicine->classification_id)

                                    <option
                                        value="{{ $classification->id }}"
                                    >
                                        {{ $classification->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Sub Clasificacion</label>
                            <select name="sub_classification_id"  class="browser-default custom-select">
                               @if($medicine->sub_classification_id)
                                <option
                                    value="{{ $medicine->sub_classification_id }}"
                                >
                                    {{ $medicine->sub_classification->name }}
                                </option>
                                @else
                                <option value="">Sin Sub_Clasificacion</option>
                               @endif

                                @foreach($subclassifications as $subclassification)

                                    @continue(@$subclassification->id == @$medicine->sub_classification->id)

                                    <option
                                        value="{{ $subclassification->id }}"
                                    >
                                        {{ $subclassification->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Principio Activo</label>
                            @error('active_principlel')
                                <span class="small text-danger">*Debes llenar este campo</span>
                            @enderror
                            <textarea
                                name="active_principle"
                                id="active_principle"
                                cols=""
                                rows="4"
                                class="form-control"
                            >
                                {{ old('active_principle', $medicine->active_principle) }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Forma Farmaceutica</label>
                            @error('pharmaceutical_form')
                                <span class="small text-danger">*Debes llenar este campo</span>
                            @enderror
                            <textarea
                                name="pharmaceutical_form"
                                id="pharmaceutical_form"
                                cols=""
                                rows="4"
                                class="form-control"
                            >
                                {{ old('pharmaceutical_form', $medicine->pharmaceutical_form) }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Indicaciones</label>
                            @error('indications')
                                <span class="small text-danger">*Debes llenar este campo</span>
                            @enderror
                            <textarea
                                name="indications"
                                id="indications"
                                cols=""
                                rows="4"
                                class="form-control"
                            >
                                {{ old('indications', $medicine->indications) }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Via de Dosificacion</label>
                            @error('route_dosage')
                                <span class="small text-danger">*Debes llenar este campo</span>
                            @enderror
                            <textarea
                                name="route_dosage"
                                id="route_dosage"
                                cols=""
                                rows="4"
                                class="form-control"
                            >
                                {{ old('route_dosage', $medicine->route_dosage) }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Reglas de Manejo</label>
                            @error('management_rules')
                                <span class="small text-danger">*Debes llenar este campo</span>
                            @enderror
                            <textarea
                                name="management_rules"
                                id="management_rules"
                                cols=""
                                rows="4"
                                class="form-control"
                            >
                                {{ old('management_rules', $medicine->management_rules) }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Observaciones</label>
                            @error('observations')
                                <span class="small text-danger">*Debes llenar este campo</span>
                            @enderror
                            <textarea
                                name="observations"
                                id="observations"
                                cols=""
                                rows="4"
                                class="form-control"
                            >
                                {{ old('observations', $medicine->observations) }}
                            </textarea>
                        </div>

                        <div class="form-group">
                            <label>Criterio</label>
                            <select
                              name="criterion"
                              class="browser-default custom-select"
                            >
                              <option value="">Seleccione una opcion</option>
                              <option {{ ($medicine->criterion) == 'STOPP' ? 'selected' : '' }} value="STOPP">STOPP</option>
                              <option {{ ($medicine->criterion) == 'START' ? 'selected' : '' }} value="START">START</option>
                            </select>
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
                                {{ old('additional', $medicine->additional) }}
                            </textarea>
                        </div>
                        <hr>
                        <div class="form-group">
                            @csrf
                            @method('put')
                            <input
                                id="editar"
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
    tinymce.init({
        selector: '#active_principle',
        plugins: 'table code advtable lists fullscreen',
        language: 'es'
    })
    tinymce.init({
        selector: '#pharmaceutical_form',
        plugins: 'table code advtable lists fullscreen',
        language: 'es'
    })
    tinymce.init({
        selector: '#route_dosage',
        plugins: 'table code advtable lists fullscreen',
        language: 'es'
    })
    tinymce.init({
        selector: '#management_rules',
        plugins: 'table code advtable lists fullscreen',
        language: 'es'
    })
    tinymce.init({
        selector: '#observations',
        plugins: 'table code advtable lists fullscreen',
        language: 'es'
    })
    tinymce.init({
        selector: '#indications',
        plugins: 'table code advtable lists fullscreen',
        language: 'es'
    })
    </script>



@stop

