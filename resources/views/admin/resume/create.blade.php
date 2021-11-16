@extends('adminlte::page')

@section('content')


<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    CREAR CURRICULUM
                    <a href="{{ route('resume.index') }}" class="btn btn-danger btn-sm mb-4 float-right">Cancelar</a>
                    <button
                        class="btn btn-primary btn-sm mb-4 mr-2 float-right"
                        onclick="document.getElementById('crear').click()"
                    >
                    Crear
                    </button>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('resume.store') }}" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label> Foto </label>
                            <input
                                type="file"
                                name="photo"
                                class="form-control @error('photo') is-invalid @enderror"
                                id="photo"
                            >

                            {{-- previsualizar foto --}}
                            <div class="form-group text-center">
                                <img id="preview-photo"
                                class="mt-4"
                                    src=""
                                    width="50%"
                                    height="auto"
                                >
                            </div>

                        </div>

                        <div class="form-group">
                            <label>Nombre</label>
                            <input
                                type="text"
                                name="name"
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name') }}"
                                autofocus
                            >
                        </div>
                        <div class="form-group">
                            <label>Profesion</label>
                            <input
                                type="text"
                                name="profession"
                                class="form-control @error('profession') is-invalid @enderror"
                                value="{{ old('profession') }}"
                            >
                        </div>
                        <div class="form-group">
                            <label>Perfil Personal</label>
                            @error('personal_profile')
                                <span class="small text-danger">*Debes llenar este campo</span>
                            @enderror
                            <textarea
                                name="personal_profile"
                                id="personal_profile"
                                cols=""
                                rows="4"
                                class="form-control"
                            >
                                {{ old('personal_profile') }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Experiencia Laboral</label>
                            @error('laboral_experience')
                                <span class="small text-danger">*Debes llenar este campo</span>
                            @enderror
                            <textarea
                                name="laboral_experience"
                                id="laboral_experience"
                                cols=""
                                rows="4"
                                class="form-control"
                            >
                                {{ old('laboral_experience') }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Historial Academico</label>
                            @error('academic_history')
                                <span class="small text-danger">*Debes llenar este campo</span>
                            @enderror
                            <textarea
                                name="academic_history"
                                id="academic_history"
                                cols=""
                                rows="4"
                                class="form-control"
                            >
                                {{ old('academic_history') }}
                            </textarea>
                        </div>

                        <div class="form-group">
                            <label>Direccion</label>
                            <input
                                type="text"
                                name="address"
                                class="form-control @error('address') is-invalid @enderror"
                            >
                        </div>
                        <div class="form-group">
                            <label>Correo Electronico</label>
                            <input
                                type="email"
                                name="email"
                                class="form-control @error('email') is-invalid @enderror"
                            >
                        </div>
                        <div class="form-group">
                            <label>Telefono</label>
                            <input
                                type="number"
                                name="telephone"
                                class="form-control @error('telephone') is-invalid @enderror"
                            >
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input
                                type="text"
                                name="facebook"
                                class="form-control @error('facebook') is-invalid @enderror"
                            >
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <input
                                type="text"
                                name="instagram"
                                class="form-control @error('instagram') is-invalid @enderror"
                            >
                        </div>
                        <div class="form-group">
                            <label>Reconocimientos Otorgados</label>
                            <textarea
                                name="awards_granted"
                                id="awards_granted"
                                cols=""
                                rows="4"
                                class="form-control"
                            >
                                {{ old('awards_granted') }}
                            </textarea>
                        </div>

                        <hr>
                        <div class="form-group">
                            @csrf
                            <input
                                id="crear"
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


@stop



@section('js')

    <script src="https://cdn.tiny.cloud/1/oph8tkt13egu2yl9zxiyutfk4g3b5srt52tr11x29913nl44/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
    tinymce.init({
        selector: '#laboral_experience',
        plugins: 'table code advtable lists fullscreen',
        language: 'es'
    })
    tinymce.init({
        selector: '#academic_history',
        plugins: 'table code advtable lists fullscreen',
        language: 'es'
    })
    tinymce.init({
        selector: '#awards_granted',
        plugins: 'table code advtable lists fullscreen',
        language: 'es'
    })
    tinymce.init({
        selector: '#personal_profile',
        plugins: 'table code advtable lists fullscreen',
        language: 'es'
    })
    </script>

    <script>

    $(document).ready(function (e) {


        $('#photo').change(function(){

            let reader = new FileReader();

            reader.onload = (e) => {

                $('#preview-photo').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);

        });

    });

    </script>


@stop

