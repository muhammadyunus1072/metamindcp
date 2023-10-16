@inject('ServiceContent', 'App\Models\ServiceContent')

<section class="section-padding" style="background-color: {{ $item->bg_color }}">
    <div class="container">
        @if ($item->getType() == $ServiceContent::TYPE_IMAGE_WITH_TEXT)
            <div class="row">
                @if ($item->image_position == null || $item->image_position == $ServiceContent::IMAGE_POSITION_LEFT)
                    <div class="col-md-4 d-flex justify-content-center">
                        <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid rounded"
                            style="max-height: 350px;">
                    </div>
                @endif
                <div class="col-md-8">
                    <h2 style="color: {{ $item->title_color }}"class="fw-bolder">{{ $item->title }}</h2>
                    <div style="color: {{ $item->description_color }}">
                        {!! nl2br($item->description) !!}
                    </div>

                    <div class="row mt-3">
                        @foreach ($item->service_content_cols as $col)
                            <div style="color: {{ $item->poin_color }}" class="col-md-{{ $item->getCol() }} mb-4">
                                <h6 style="color: {{ $item->poin_color }}">{{ $col->title }}</h6>
                                {!! nl2br($col->content) !!}
                            </div>
                        @endforeach
                    </div>
                </div>
                @if ($item->image_position == $ServiceContent::IMAGE_POSITION_RIGHT)
                    <div class="col-md-4 d-flex justify-content-center">
                        <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid rounded"
                            style="max-height: 350px;">
                    </div>
                @endif
            </div>
        @elseif ($item->getType() == $ServiceContent::TYPE_IMAGE_WITHOUT_TEXT)
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid rounded"
                        style="max-height: 700px;">
                </div>
            </div>
        @elseif ($item->getType() == $ServiceContent::TYPE_NO_IMAGE_WITH_TEXT_DETAIL)
            <div class="row">
                <div class="col-md-4">
                    <h2 style="color: {{ $item->title_color }}"class="fw-bolder">{{ $item->title }}</h2>
                    <div style="color: {{ $item->description_color }}">
                        {!! nl2br($item->description) !!}
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row mt-3">
                        @foreach ($item->service_content_cols as $col)
                            <div style="color: {{ $item->poin_color }}" class="col-md-{{ $item->getCol() }} mb-4">
                                <h6 style="color: {{ $item->poin_color }}">{{ $col->title }}</h6>
                                {!! nl2br($col->content) !!}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @elseif ($item->getType() == $ServiceContent::TYPE_NO_IMAGE_WITHOUT_TEXT_DETAIL)
            <div class="row">
                <div class="col-md-12">
                    <h2 style="color: {{ $item->title_color }}"class="fw-bolder">{{ $item->title }}</h2>
                    <div style="color: {{ $item->description_color }}">
                        {!! nl2br($item->description) !!}
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>
