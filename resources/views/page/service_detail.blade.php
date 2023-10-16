@extends('layouts.main')

@section('content')
    {{-- BANNER --}}
    <section class="news-detail-header-section text-center"
        style="background-image: url('{{ asset('storage/' . $service->file) }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <h1 class="text-white text-start">{{ $service->title }}</h1>
                    <p class="text-white text-start">
                        {{ $service->description_banner }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- SERVICE DETAIL --}}
    @foreach ($service->details()->orderBy('position')->get() as $item)
        @include('page.item_service_detail', ['item' => $item])
    @endforeach

    {{-- DIVIDER SECTION --}}
    <section class="section-padding bg-dark-blue">
        <div class="container">
            <div class="text-center">
                <h3 class="text-white mb-4">Konsultasikan kebutuhan perusahaan anda bersama METAMIND</h3>
                <a target="_blank" href="{{ $setting->url_consultation }}" class="btn btn-success bg-green rounded-pill">
                    Konsultasikan dengan kami
                </a>
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
@endsection
