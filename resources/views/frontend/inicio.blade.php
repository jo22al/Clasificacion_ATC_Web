@extends('layouts.app')

@section('content')


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5" style="border-color: rgba(256, 256, 256, .3) !important;">GUIA ATC</h5>
                    <h1 class="display-1 text-white mb-md-4">Para Usuarios Geriatricos</h1>
                    <div class="pt-2">
                        <a href=" {{ route('guiaatc') }} " class="btn btn-light rounded-pill py-md-3 px-md-5 mx-2">Ver Guia</a>
                        <a href="#team" class="btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2">Integrantes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Sobre el Proyecto</h5>
                        <h1 class="display-4">Guia de Medicamentos Geriatricos</h1>
                    </div>
                    <p>

                        Proyecto de final de carrera por los estudiantes de la universidad "universidad",
                        sobre una guia de medicamentos y semaforo de medicamentos para pacientes geriatricos.

                    </p>
                    <div class="row g-3 pt-3">
                        <a href="https://play.google.com/store/apps/details?id=gt.chatos.guiaatc" target="_blank" class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fab fa-android" style="font-size: 50px"></i>
                                <h6 class="mb-0">App Movil<small class="d-block text-primary">ANDROID</small></h6>
                            </div>
                        </a>
                        <a href="https://appgallery.huawei.com/app/C105011817?sharePrepath=ag&locale=es_GT" target="_blank" class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fas fa-mobile" style="font-size: 50px"></i>
                                <h6 class="mb-0">App Movil<small class="d-block text-primary">HUAWEI</small></h6>
                            </div>
                        </a>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">GUIA ATC</h5>
                <h1 class="display-4">Grupos</h1>
            </div>

            <div class="row g-5">
                @foreach($groups as $group)
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon mb-4">
                                <h1 class="mb-3 text-white">{{ $group->letter }}</h1>
                            </div>
                            <h4 class="mb-3">{{ $group->name }}</h4>

                                <a
                                class="btn btn-lg btn-primary rounded-pill"
                                href=" {{ route('grupo', [
                                    'group' => $group,
                                    'name' => $group->name
                                ]) }} "
                            >
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    <!-- Services End -->


    <!-- Search Start -->
    <div class="container-fluid bg-primary my-5 py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-white text-uppercase border-bottom border-5">Busca por Medicamento o Tratamiento</h5>
                {{-- <h1 class="display-4 mb-4">Find A Healthcare Professionals</h1> --}}
                {{-- <h5 class="text-white fw-normal">Duo ipsum erat stet dolor sea ut nonumy tempor. Tempor duo lorem eos sit sed ipsum takimata ipsum sit est. Ipsum ea voluptua ipsum sit justo</h5> --}}
            </div>
            <form method="get" action="{{ route('search') }}" class="mx-auto" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    @csrf
                    <input name="medicine" type="search" class="form-control border-primary w-50" placeholder="Buscar" aria-label="search">
                    <button type="submit" class="btn btn-dark border-0 w-25">Buscar</button>
                </div>
            </form>
        </div>
    </div>


    <!-- Search End -->


    <!-- Team Start -->
    <div class="container-fluid py-5" id="team">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Integrantes</h5>
                <h1 class="display-6">MEDICOS MAESTRANTES QUE HICIERON POSIBLE EL PROYECTO</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative">

                @foreach($resumes as $resume)
                    <div class="team-item">
                        <div class="row g-0 bg-light rounded overflow-hidden">
                            <div class="col-12 col-sm-5 h-100">
                                <img class="img-fluid h-100"  src="{{ $resume->get_photo }}" style="object-fit: cover;">
                            </div>
                            <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                                <div class="mt-auto p-4">
                                    <h3>{{ $resume->name }}</h3>
                                    <h6 class="fw-normal fst-italic text-primary mb-4">{{ $resume->profession }}</h6>
                                </div>
                                <div class="d-flex mt-auto border-top p-4">
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="{{ $resume->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="{{ $resume->instagram }}"><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="{{ route('resume', $resume) }}"><i class="fas fa-user-md"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Team End -->



@endsection
