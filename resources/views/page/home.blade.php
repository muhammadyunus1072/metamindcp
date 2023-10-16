@extends('layouts.main')

@section('content')
    {{-- BANNER --}}
    <section class="hero-section hero-section-full-height">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-12 p-0">
                    <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($banners as $key => $value)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <img src="{{ asset('storage/' . $value->file) }}" class="carousel-image img-fluid"
                                        alt="{{ $value->file }}">
                                    <div class="carousel-caption text-start">
                                        <h4 class="text-green">{{ $value->subtitle }}</h4>
                                        <h1 class="text-white">{{ $value->title }}</h1>
                                        <p class="text-white">{{ $value->description }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        @if ($banners->count() > 1)
                            <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ABOUT US --}}
    <section class="section-padding">
        <div class="container">
            <ul class="nav nav-underline justify-content-center" id="pills-tab" role="tablist">
                @foreach ($abouts as $key => $value)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $key == 0 ? 'active' : '' }}" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-{{ $key }}" type="button" role="tab"
                            aria-controls="pills-home" aria-selected="true">
                            {{ $value->subtitle }}
                            <br>{{ $value->title }}
                        </button>
                    </li>
                @endforeach
            </ul>

            <div class='divider-green'></div>

            <div class="tab-content" id="pills-tabContent">
                @foreach ($abouts as $key => $value)
                    <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}" id="pills-{{ $key }}"
                        role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                        <div class="row mt-5">
                            <div class="col-md-4 d-flex flex-column align-items-center">
                                <img class="img-fluid" src="{{ asset('storage/' . $value->file) }}">
                            </div>
                            <div class="col-md-8">
                                <h4 class="text-green">{{ $value->subtitle }}</h4>
                                <h3 class="text-blue">{{ $value->title }}</h3>
                                <p>{{ $value->description }}</p>

                                @if (count($value->details) > 0)
                                    <div class="row">
                                        @foreach ($value->details as $detail)
                                            <div class="col-md-6">
                                                <div class="text-blue">{{ $detail->title }}</div>
                                                <p>{{ $detail->description }}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- TRANING GROUPS --}}
    <section class="section-padding bg-dark-blue">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12 text-center mb-4">
                        <h3 class="text-center text-green">Our</h3>
                        <h2 class="text-white text-center mb-5">Training Program</h2>
                    </div>
                    @forelse ($trainingGroups as $item)
                        <div class="col-md-6 col-lg-4 mb-4 d-flex justify-content-center">
                            <div class="text-center">
                                <img src="{{ asset('storage/' . $item->file) }}" class="rounded img-fluid"
                                    max-height="250px">
                                <h4 class="text-white mt-3 mb-3">{{ $item->title }}</h4>
                                <p class="text-white">{{ $item->description }}</p>
                                <a class="btn btn-success bg-green rounded-pill mb-3" href="{{ route('training') }}">
                                    Pelajari Lebih Lanjut
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="col-lg-12 text-center">
                            <h4 class="text-white">Belum Ada Pelatihan</h4>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    {{-- EVENT --}}
    <section class="section-padding">
        <div class="container">
            <h2 class="text-center text-blue">Upcoming Events</h2>
            <div class='divider-green-thick'></div>

            @forelse ($events as $item)
                @include('page.item_event', ['event' => $item])
            @empty
                <div class="text-center">
                    <h4>Belum Ada Event</h4>
                </div>
            @endforelse

            @if ($events->count() > 0)
                <div class="text-center mt-4 mb-4">
                    <a href="{{ route('event') }}" class="btn btn-success bg-green rounded-pill">
                        Cek Jadwal Lengkap
                    </a>
                </div>
            @endif
        </div>
    </section>

    {{-- DIVIDER SECTION --}}
    <section class="section-padding bg-dark-blue">
        <div class="text-center">
            <h3 class="text-white mb-4">Butuh event sesuai dengan kebutuhan perusahaan?</h3>
            <a target="_blank" href="{{ $setting->url_consultation }}" class="btn btn-success bg-green rounded-pill">
                Konsultasikan dengan kami
            </a>
        </div>
    </section>

    {{-- TRANINERS --}}
    <section class="section-padding">
        <div class="container">
            <h2 class="text-center text-blue" class="text-blue"><b>Meet Our Trainer</b></h2>
            <div class="row">
                @forelse ($trainers as $item)
                    @include('page.item_trainer', ['trainer' => $item])
                @empty
                    <div class="col-md-12 text-center">
                        <h4>Belum Ada Trainer</h4>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    {{-- COMPANY PROFILE --}}
    <section class="section-padding bg-dark-blue">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3">
                    <h3 class="text-white"><strong>{{ $setting->year_established }}</strong></h3>
                    <h4 class="text-white">Years Estabilished</h4>
                </div>
                <div class="col-md-3">
                    <h3 class="text-white"><strong>{{ $setting->total_alumni }}</strong></h3>
                    <h4 class="text-white">Total Alumni</h4>
                </div>
                <div class="col-md-3">
                    <h3 class="text-white"><strong>{{ $setting->total_training }}</strong></h3>
                    <h4 class="text-white">Total Training</h4>
                </div>
                <div class="col-md-3">
                    <h3 class="text-white"><strong>{{ $setting->happy_client }}</strong></h3>
                    <h4 class="text-white">Happy Clients</h4>
                </div>
            </div>
        </div>
    </section>

    {{-- CLIENT --}}
    <section class="section-padding">
        <div class="container">
            <h2 class="text-center mb-5 text-blue"><b>Our Happy Clients</b></h2>
            <div class="row d-flex justify-content-center">
                @forelse ($clients as $item)
                    <div class="col-auto">
                        <img src="{{ asset('storage/' . $item->file) }}" class="img-fluid" style="max-height: 100px;">
                    </div>
                @empty
                    <div class="col-md-12 text-center">
                        <h4>Belum Ada Client</h4>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    {{-- DIVIDER SECTION --}}
    <section class="section-padding bg-dark-blue">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h4 class="text-white">
                        Percayakan kebutuhan Training & Coaching perusahaan Anda kepada kami
                    </h4>
                    <br>
                    <a target="_blank" href="{{ $setting->url_consultation }}"
                        class="btn btn-success bg-green rounded-pill">
                        Konsultasikan dengan kami
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
