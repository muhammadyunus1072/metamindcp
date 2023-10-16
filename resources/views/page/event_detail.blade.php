@extends('layouts.main')

@section('content')
    {{-- BANNER --}}
    <section class="news-detail-header-section text-center"
        style="background-image: url('{{ asset('storage/' . $event->file) }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <h3 class="text-green text-start">{{ $event->title }}</h3>
                    <h1 class="text-white text-start">{{ $event->subtitle }}</h1>
                    <p class="text-white text-start">
                        {{ $event->description }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- EVENT DETAIL --}}
    @foreach ($event_details as $item)
        <section class="section-padding" style="background-color: {{ $item->bg_color }}">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h6 style="color: {{ $item->subtitle_color }}">{{ $item->subtitle }}</h6>
                        <h2 style="color: {{ $item->title_color }}"class="fw-bolder">{{ $item->title }}</h2>
                    </div>
                    <div class="col-md-12"  style="color: {{ $item->description_color }}">
                        {!! nl2br($item->description) !!}
                    </div>
                </div>
                <div class="row mt-3">
                    @foreach ($item->event_detail_cols as $col)
                        <div style="color: {{ $item->poin_color }}" class="col-md-{{ $item->getCol() }} mb-4">
                            <h6 style="color: {{ $item->poin_color }}">{{ $col->title }}</h6>
                            {!! nl2br($col->content) !!}
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endforeach

    {{-- TRAINER --}}
    <section class="section-padding bg-even">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <h2 class="text-blue fw-bolder">Fasilitator:</h2>
                </div>
                <div class="col-md-5 d-flex justify-content-center">
                    <img class="img-fluid" src="{{ asset('storage/' . $event->trainer->photo) }}"
                        style="max-height: 350px;">
                </div>
                <div class="col-md-7">
                    <h6 class="text-blue">{{ $event->trainer->name }}</h6>
                    <p>{{ $event->trainer->title }}</p>
                    <p>{!! nl2br($event->trainer->achievement) !!}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- SCHEDULE --}}
    <section class="section-padding">
        <div class="container">
            <div class="mb-5">
                <h2 class="text-blue fw-bolder">Jadwal Training</h2>
            </div>

            <div class="row justify-content-between">
                {{-- SCHEDULE - DATE --}}
                <div class="col-md-4 border-5 border-dark border-end d-lg-flex justify-content-center">
                    <div class="row">
                        <div class="col-auto">
                            <h1><i class="bi bi-calendar3"></i></h1>
                        </div>
                        <div class="col">
                            Tanggal
                            <p class="fw-bolder">
                                @if ($event->date_start == $event->date_end)
                                    @dateDay($event->date_start)
                                @else
                                    @dateDay($event->date_start) - @dateDay($event->date_end)
                                @endif
                            </p>
                        </div>
                    </div>
                </div>

                {{-- SCHEDULE - TIME --}}
                <div class="col-md-4 border-5 border-dark border-end d-lg-flex justify-content-center">
                    <div class="row">
                        <div class="col-auto">
                            <h1><i class="bi bi-clock"></i></h1>
                        </div>
                        <div class="col">
                            Waktu
                            <p class="fw-bolder">
                                @time($event->time_start) - @time($event->time_end)
                            </p>
                        </div>
                    </div>
                </div>

                {{-- SCHEDULE - VENUE --}}
                <div class="col-md-4 d-lg-flex justify-content-center">
                    <div class="row">
                        <div class="col-auto">
                            <h1><i class="bi bi-geo-alt"></i></h1>
                        </div>
                        <div class="col">
                            Venue
                            <p class="fw-bolder">
                                {{ $event->venue }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- DIVIDER SECTION --}}
    <section class="section-padding bg-dark-blue">
        <div class="container">
            <div class="text-center">
                <h3 class="text-white mb-4">Kuota terbatas! Ayo segera daftar sekarang! </h3>
                <a target="_blank" href="{{ $event->btn_url }}"
                    class="btn btn-lg btn-success bg-green rounded-pill">{{ $event->btn_text }}</a>

                @if ($event->quota)
                    <p class="text-white mt-3">Kuota Terbatas Hanya Untuk {{ $event->quota }} Peserta</p>
                @endif
            </div>
        </div>
    </section>

    {{-- TESTIMONIES --}}
    <section class="testimonial-section section-padding section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 mx-auto">
                    <h6>Apa kata mereka</h6>
                    <h2 class="mb-lg-3"><strong>Tentang Program Ini?</strong> </h2>

                    <div id="testimonial-carousel" class="carousel carousel-fade slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div id="carouselExampleFade" class="carousel slide carousel-fade">
                                <div class="carousel-inner">
                                    @foreach ($testimonies as $key => $value)
                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                            <h4 class="carousel-title">{{ $value->description }}</h4>
                                            <small class="carousel-name"><span
                                                    class="carousel-name-title">{{ $value->name }}</span></small>
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center mb-5">
                        <h5 class="text-blue">Pertanyaan yang sering diajukan</h5>
                    </div>
                </div>
                <div class="accordion">
                    @forelse ($faqs as $key => $value)
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion-{{ $key }}" aria-expanded="true"
                                    aria-controls="accordion-{{ $key }}">
                                    {{ $value->question }}
                                </button>
                            </h2>
                            <div id="accordion-{{ $key }}" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <p>{{ $value->answer }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="text-center">Data Belum Ada</h4>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
@endsection
