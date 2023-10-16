<div class="col-md-4">
    <div class="text-center">
        <img src="{{ asset('storage/' . $trainer->photo) }}" class="rounded mt-5" style="max-height: 250px;">
        <h4 class="text-blue mt-3">{{ $trainer->name }}</h4>

        <p class="text-blue">{{ $trainer->title }}</p>
        <p>{{ $trainer->description }}</p>

        <a target="_blank" href="#" class="btn btn-success bg-green rounded-pill mt-3 mb-5">Cek
            Profile Lengkap
        </a>
    </div>
</div>
