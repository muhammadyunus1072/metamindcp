<div class="d-none d-lg-block">
    <div class="row py-2">
        <div class="col-auto">
            <h2 class="text-blue m-0 p-0">
                @day($event->date_start)
            </h2>
        </div>
        <div class="col-auto">
            <h6 class="text-blue m-0 p-0">
                @monthSimple($event->date_start)
            </h6>
            <div class="text-blue m-0 p-0 fw-bold">
                @year($event->date_start)
            </div>
        </div>
        <div class="col-md-7">
            <div>
                <h4 class="text-blue m-0 p-0">{{ $event->title }}</h4>
            </div>
            <div class="row">
                {{-- EVENT DATE --}}
                <div class="col-auto">
                    <i class="bi bi-calendar-check"></i>
                    @date($event->date_start) - @date($event->date_end)
                </div>

                {{-- EVENT LOCATION --}}
                <div class="col-auto">
                    <i class="bi bi-circle-fill" style="font-size: 8px;"></i>
                    {{ $event->venue }}
                </div>

                {{-- EVENT TIME --}}
                <div class="col-auto">
                    <i class="bi bi-circle-fill" style="font-size: 8px;"></i>
                    @time($event->time_start) - @time($event->time_end)
                </div>
            </div>
        </div>

        <div class="col-md d-flex justify-content-end align-items-center">
            <a target="_blank" href="{{ $event->btn_url }}"
                class="btn btn-success bg-green rounded-pill">{{ $event->btn_text }}</a>
            <a href="{{ route('event_detail', Crypt::encrypt($event->id)) }}"
                class="btn btn-outline-success border-green rounded-pill">Info Lebih Detail</a>
        </div>
    </div>
</div>

<div class="d-md-block d-lg-none">
    <div class="row py-2">
        <div class="col-auto d-none d-md-flex flex-column justify-content-center">
            <h1 class="text-blue m-0 p-0">
                @day($event->date_start)
            </h1>
        </div>

        <div class="col-auto d-none d-md-flex flex-column justify-content-center">
            <h4 class="text-blue m-0 p-0">
                @monthSimple($event->date_start)
            </h4>
            <h5 class="text-blue m-0 p-0 fw-bold">
                @year($event->date_start)
            </h5>
        </div>

        <div class="col-md-6">
            <div>
                <h4 class="text-blue m-0 p-0">{{ $event->title }}</h4>
            </div>
            <div class="row">
                {{-- EVENT DATE --}}
                <div class="col-auto">
                    <i class="bi bi-calendar-check"></i>
                    @date($event->date_start) - @date($event->date_end)
                </div>

                {{-- EVENT LOCATION --}}
                <div class="col-auto">
                    <i class="bi bi-circle-fill" style="font-size: 8px;"></i>
                    {{ $event->venue }}
                </div>

                {{-- EVENT TIME --}}
                <div class="col-auto">
                    <i class="bi bi-circle-fill" style="font-size: 8px;"></i>
                    @time($event->time_start) - @time($event->time_end)
                </div>
            </div>
        </div>

        <div class="col-md d-flex flex-column">
            <a target="_blank" href="{{ $event->btn_url }}"
                class="btn btn-success bg-green rounded-pill mb-2">{{ $event->btn_text }}</a>
            <a href="{{ route('event_detail', Crypt::encrypt($event->id)) }}"
                class="btn btn-outline-success border-green rounded-pill">Info Lebih Detail</a>
        </div>
    </div>
</div>

<div class="divider-green my-2"></div>
