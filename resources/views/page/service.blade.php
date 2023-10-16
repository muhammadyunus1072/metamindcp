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

    @foreach ($services as $index => $item)
        @include('page.item_service', ['service' => $item, 'index' => $index])
    @endforeach

    {{-- DIVIDER SECTION --}}
    <section class="section-padding bg-dark-blue">
        <div class="text-center">
            <h3 class="text-white mb-4">Konsultasikan kebutuhan perusahaan anda bersama METAMIND</h3>
            <a target="_blank" href="{{ $setting->url_consultation }}" class="btn btn-success bg-green rounded-pill">
                Hubungi Kami
            </a>
        </div>
    </section>
@endsection


@push('js')
    <script>
        $('figure').removeClass('table');
    </script>
@endpush
