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
                                        <h6 class="text-green">{{ $value->subtitle }}</h6>
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

    {{-- EVENT --}}
    <section class="section-padding">
        <div class="container">
            @forelse ($grouping_events as $month => $events)
                <h1 class="text-blue">{{ $month }}</h1>
                <div class='divider-green-thick'></div>
                @foreach ($events as $item)
                    @include('page.item_event', ['event' => $item])
                @endforeach
                <div style="margin-bottom: 100px;"></div>
            @empty
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3>Belum Ada Event Bulan Ini</h3>
                    </div>
                </div>
            @endforelse
        </div>
    </section>


    {{-- DIVIDER SECTION --}}
    <section class="section-padding bg-dark-blue">
        <div class="container">
            <div class="text-center">
                <h3 class="text-white mb-4">Masih bingung dengan jadwal?</h3>
                <a target="_blank" href="{{ $setting->url_consultation }}" class="btn btn-success bg-green rounded-pill">
                    Konsultasikan dengan kami
                </a>
            </div>
        </div>
    </section>
@endsection
