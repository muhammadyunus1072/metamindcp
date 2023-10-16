<section class="section-padding {{ $index % 2 == 0 ? '' : 'bg-light-blue' }}">
    <div class="container">
        <div class="row">
            @if ($index % 2 == 0)
                <div class="col-md-4">
                    <img src="{{ asset('storage/' . $service->thumbnail) }}" class="img-fluid  rounded"
                        style="max-height: 350px;">
                </div>
                <div class="col-md-8">
                    <h3 class="mb-2 text-blue">{{ $index + 1 }}. {{ $service->title }}</h3>

                    {!! $service->description !!}
                    <a href="{{ $service->url_service_content ? $service->url_service_content : route('service.detail', $service->id) }}"
                        class="btn btn-success bg-green rounded-pill mt-4">
                        Pelajari Lebih Lanjut
                    </a>
                </div>
            @else
                <div class="col-md-8">
                    <h3 class="mb-2 text-blue">{{ $index + 1 }}. {{ $service->title }}</h3>

                    {!! $service->description !!}
                    <a href="{{ $service->url_service_content ? $service->url_service_content : route('service.detail', $service->id) }}"
                        class="btn btn-success bg-green rounded-pill mt-4">
                        Pelajari Lebih Lanjut
                    </a>
                </div>

                <div class="col-md-4">
                    <img src="{{ asset('storage/' . $service->thumbnail) }}" class="img-fluid rounded"
                        style="max-height: 350px;">
                </div>
            @endif
        </div>
    </div>
</section>
