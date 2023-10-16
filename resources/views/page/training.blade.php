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
                        <p class="text-white text-start">{{ $service->description_banner }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- TRAINING GROUPS --}}
    @foreach ($training_groups as $key => $value)
        <section class="section-padding">
            <div class="container">
                <h6 class="text-green">Training Program {{ $key + 1 }}</h6>
                <h2 class="text-blue mb-5">{{ $value->title }}</h2>

                <ul class="nav nav-underline justify-content-center" id="pills-tab" role="tablist">
                    @foreach ($value->trainings as $index => $item)
                        @php
                            $title = $item->getTitle();
                            $subtitle = $item->getSubtitle();
                        @endphp
                        <li class="nav-item" role="presentation">
                            <button type="button" class="nav-link text-wrap {{ $index == 0 ? 'active' : '' }}"
                                id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-{{ $item->id }}"
                                role="tab" aria-controls="pills-home" aria-selected="true">

                                <div
                                    class="d-none d-md-block ps-2 pe-4 {{ $index + 1 < count($value->trainings) ? 'border-4 border-end' : '' }}">
                                    <div>{{ $title }}</div>
                                    <div>{{ $subtitle }}</div>
                                </div>

                                <div class="d-md-none">
                                    <div>{{ $title }}</div>
                                    <div>{{ $subtitle }}</div>
                                </div>
                            </button>
                        </li>
                    @endforeach
                </ul>

                <div class='divider-green'></div>

                <div class="tab-content" id="pills-tabContent">
                    @foreach ($value->trainings as $index => $item)
                        <div class="tab-pane fade {{ $index == 0 ? 'show active' : '' }}" id="pills-{{ $item->id }}"
                            role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="row mt-5">
                                <div class="col-md-4 d-flex flex-column align-items-center">
                                    <img class="img-fluid" src="{{ asset('storage/' . $item->file) }}"
                                        style="max-height: 300px;">
                                </div>
                                <div class="col-md-8">
                                    <h4 class="text-green mt-3">Tentang</h4>
                                    <h3 class="text-blue">{{ $item->title }}</h3>
                                    <p>{{ $item->description }}</p>

                                    @php
                                        $event = $item->getNearestEvent();
                                    @endphp

                                    @if ($event)
                                        <div class="row justify-content-between">
                                            {{-- SCHEDULE - DATE --}}
                                            <div class="col-md-4 border-5 border-end">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <h2><i class="bi bi-calendar3"></i></h2>
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
                                            <div class="col-md-4 border-5 border-end">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <h2><i class="bi bi-clock"></i></h2>
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
                                            <div class="col-md-4">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <h2><i class="bi bi-geo-alt"></i></h2>
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

                                        <a href="{{ route('event_detail', Crypt::encrypt($event->id)) }}"
                                            class="btn btn-success bg-green rounded-pill">
                                            Baca Selengkapnya
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endforeach
@endsection
