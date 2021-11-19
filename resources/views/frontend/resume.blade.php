@extends('layouts.app')

@section('content')

<div class="wrapper mt-lg-5">
    <div class="sidebar-wrapper">
        <div class="profile-container">
            <img class="profile" src=" {{ $resume->get_photo }} " alt=""  width="100px" height="auto">
            <h1 class="name">{{ $resume->name }}</h1>
            <h3 class="tagline">{{ $resume->profession }}</h3>
        </div><!--//profile-container-->

        <div class="contact-container container-block">
            <ul class="list-unstyled contact-list">
                <li><i class="fas fa-map-marker-alt"></i><a> {{ $resume->address }} </a></li>
                <li class="email"><i class="fas fa-envelope"></i><a href="mailto: {{ $resume->email }}"> {{ $resume->email }} </a></li>
                <li class="phone"><i class="fas fa-phone"></i><a href="tel:502{{ $resume->telephone }}"> {{ $resume->telephone }}</a></li>
                <li><i class="fab fa-facebook"></i><a href="{{ $resume->facebook }}" target="_blank"> Facebook</a></li>
                <li><i class="fab fa-instagram"></i><a href="{{ $resume->instagram }}" target="_blank"> Instagram</a></li>
            </ul>
        </div><!--//contact-container-->

    </div><!--//sidebar-wrapper-->

    <div class="main-wrapper">

        <section class="section summary-section">
            <h2 class="section-title"><span class="icon-holder"><i class="fas fa-user"></i></span>Perfil Personal</h2>
            <div class="summary">
                <p>
                    {!! $resume->personal_profile !!}
                </p>
            </div>
        </section>

        <section class="section summary-section">
            <h2 class="section-title"><span class="icon-holder"> <i class="fas fa-briefcase"></i> </span>Experiencia Laboral</h2>
            <div class="summary">
                <p>
                    {!! $resume->laboral_experience !!}
                </p>
            </div>
        </section>

        <section class="section summary-section">
            <h2 class="section-title"><span class="icon-holder"> <i class="fas fa-graduation-cap"></i> </span>Historial Academico</h2>
            <div class="summary">
                <p>
                    {!! $resume->academic_history !!}
                </p>
            </div>
        </section>

        @if($resume->awards_granted)

            <section class="section summary-section">
                <h2 class="section-title"><span class="icon-holder"> <i class="fas fa-trophy"></i> </span>Reconocimientos Otorgados</h2>
                <div class="summary">
                    <p>
                        {!! $resume->awards_granted !!}
                    </p>
                </div>
            </section>

        @endif


    </div><!--//main-body-->
</div>




<style>


    .wrapper {
      background: #42A8C0;
      max-width: 960px;
      margin: 0 auto;
      position: relative;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    }

    .sidebar-wrapper {
      background: #42A8C0;
      position: absolute;
      right: 0;
      width: 240px;
      height: 100%;
      min-height: 800px;
      color: #fff;
    }
    .sidebar-wrapper a {
      color: #fff;
    }
    .sidebar-wrapper .profile-container {
      padding: 30px;
      background: rgba(0, 0, 0, 0.2);
      text-align: center;
      color: #fff;
    }
    .sidebar-wrapper .name {
      font-size: 32px;
      font-weight: 900;
      margin-top: 0;
      margin-bottom: 10px;
    }
    .sidebar-wrapper .tagline {
      color: rgba(255, 255, 255, 0.6);
      font-size: 16px;
      font-weight: 400;
      margin-top: 0;
      margin-bottom: 0;
    }
    .sidebar-wrapper .profile {
      margin-bottom: 15px;
    }
    .sidebar-wrapper .contact-list .svg-inline--fa {
      margin-right: 5px;
      font-size: 18px;
      vertical-align: middle;
    }
    .sidebar-wrapper .contact-list li {
      margin-bottom: 15px;
    }
    .sidebar-wrapper .contact-list li:last-child {
      margin-bottom: 0;
    }
    .sidebar-wrapper .contact-list .email .svg-inline--fa {
      font-size: 14px;
    }
    .sidebar-wrapper .container-block {
      padding: 30px;
    }
    .sidebar-wrapper .container-block-title {
      text-transform: uppercase;
      font-size: 16px;
      font-weight: 700;
      margin-top: 0;
      margin-bottom: 15px;
    }
    .sidebar-wrapper .degree {
      font-size: 14px;
      margin-top: 0;
      margin-bottom: 5px;
    }
    .sidebar-wrapper .education-container .item {
      margin-bottom: 15px;
    }
    .sidebar-wrapper .education-container .item:last-child {
      margin-bottom: 0;
    }
    .sidebar-wrapper .education-container .meta {
      color: rgba(255, 255, 255, 0.6);
      font-weight: 500;
      margin-bottom: 0px;
      margin-top: 0;
      font-size: 14px;
    }
    .sidebar-wrapper .education-container .time {
      color: rgba(255, 255, 255, 0.6);
      font-weight: 500;
      margin-bottom: 0px;
    }
    .sidebar-wrapper .languages-container .lang-desc {
      color: rgba(255, 255, 255, 0.6);
    }
    .sidebar-wrapper .languages-list {
      margin-bottom: 0;
    }
    .sidebar-wrapper .languages-list li {
      margin-bottom: 10px;
    }
    .sidebar-wrapper .languages-list li:last-child {
      margin-bottom: 0;
    }
    .sidebar-wrapper .interests-list {
      margin-bottom: 0;
    }
    .sidebar-wrapper .interests-list li {
      margin-bottom: 10px;
    }
    .sidebar-wrapper .interests-list li:last-child {
      margin-bottom: 0;
    }

    .main-wrapper {
      background: #fff;
      padding: 60px;
      padding-right: 300px;
    }
    .main-wrapper .section-title {
      text-transform: uppercase;
      font-size: 20px;
      font-weight: 500;
      color: #2d7788;
      position: relative;
      margin-top: 0;
      margin-bottom: 20px;
    }
    .main-wrapper .section-title .icon-holder {
      width: 30px;
      height: 30px;
      margin-right: 8px;
      display: inline-block;
      color: #fff;
      border-radius: 50%;
      -moz-background-clip: padding;
      -webkit-background-clip: padding-box;
      background-clip: padding-box;
      background: #2d7788;
      text-align: center;
      font-size: 16px;
      position: relative;
      top: -8px;
    }
    .main-wrapper .section-title .icon-holder .svg-inline--fa {
      font-size: 14px;
      margin-top: 6px;
    }
    .main-wrapper .section {
      margin-bottom: 60px;
    }
    .main-wrapper .experiences-section .item {
      margin-bottom: 30px;
    }
    .main-wrapper .upper-row {
      position: relative;
      overflow: hidden;
      margin-bottom: 2px;
    }
    .main-wrapper .job-title {
      color: #3F4650;
      font-size: 16px;
      margin-top: 0;
      margin-bottom: 0;
      font-weight: 500;
    }
    .main-wrapper .time {
      position: absolute;
      right: 0;
      top: 0;
      color: #97AAC3;
    }
    .main-wrapper .company {
      margin-bottom: 10px;
      color: #97AAC3;
    }
    .main-wrapper .project-title {
      font-size: 16px;
      font-weight: 400;
      margin-top: 0;
      margin-bottom: 5px;
    }
    .main-wrapper .projects-section .intro {
      margin-bottom: 30px;
    }
    .main-wrapper .projects-section .item {
      margin-bottom: 15px;
    }

    .skillset .item {
      margin-bottom: 15px;
      overflow: hidden;
    }
    .skillset .level-title {
      font-size: 14px;
      margin-top: 0;
      margin-bottom: 12px;
    }
    .skillset .level-bar {
      height: 12px;
      background: #f5f5f5;
      border-radius: 2px;
      -moz-background-clip: padding;
      -webkit-background-clip: padding-box;
      background-clip: padding-box;
    }
    .skillset .theme-progress-bar {
      background: #68bacd;
    }

    .footer {
      padding: 30px;
      padding-top: 60px;
    }
    .footer .copyright {
      line-height: 1.6;
      color: #545E6C;
      font-size: 13px;
    }
    .footer .fa-heart {
      color: #fb866a;
    }

    @media (max-width: 767.98px) {
      .sidebar-wrapper {
        position: static;
        width: inherit;
      }

      .main-wrapper {
        padding: 30px;
      }

      .main-wrapper .time {
        position: static;
        display: block;
        margin-top: 5px;
      }

      .main-wrapper .upper-row {
        margin-bottom: 0;
      }
    }
    @media (min-width: 992px) {
      .skillset .level-title {
        display: inline-block;
        float: left;
        width: 30%;
        margin-bottom: 0;
      }
    }

    </style>


@endsection

