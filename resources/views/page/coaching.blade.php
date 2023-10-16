@extends('layouts.main')

@section('content')
    {{-- BANNER --}}
    @if (!empty($service))
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
    @endif

    {{-- COACHINGS --}}
    @foreach ($coachings as $item)
        <section class="section-padding">
            <div class="container">

                <h3 class="text-blue mb-4">{{ $item->title }}</h3>

                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/' . $item->file) }}" class="img-fluid rounded"
                            style="max-height: 350px;">
                    </div>
                    <div class="col-md-8">
                        <h6 class="text-blue">{{ $item->subtitle }}</h6>
                        <div>{!! nl2br($item->description) !!}</div>
                        <a href="#" class="btn btn-success bg-green rounded-pill mt-4">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@endsection
