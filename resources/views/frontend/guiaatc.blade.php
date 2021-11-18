@extends('layouts.app')

@section('content')


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
                            <a class="btn btn-lg btn-primary rounded-pill" href=" {{ route('grupo', $group) }} ">
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
                <h5 class="d-inline-block text-white text-uppercase border-bottom border-5">Busca por Medicamento</h5>
                {{-- <h1 class="display-4 mb-4">Find A Healthcare Professionals</h1> --}}
                {{-- <h5 class="text-white fw-normal">Duo ipsum erat stet dolor sea ut nonumy tempor. Tempor duo lorem eos sit sed ipsum takimata ipsum sit est. Ipsum ea voluptua ipsum sit justo</h5> --}}
            </div>
            <div class="mx-auto" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    <input type="text" class="form-control border-primary w-50" placeholder="Medicamento">
                    <button class="btn btn-dark border-0 w-25">Buscar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Search End -->

@endsection
